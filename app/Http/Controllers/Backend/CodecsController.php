<?php

namespace App\Http\Controllers\Backend;

use App\CodecConfigs;
use App\Codecs;
use App\ConfigData;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Job;
use App\Libary\callREST;
use App\Media;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use View;

class CodecsController extends Controller
{

    public function __construct()
    {
        $config = ConfigData::getInstance();
        $this->url = $config->media_server;
    }

    public function get_index()
    {
        $video_codecs = Codecs::where('media_type', 'video')->get();
        $image_codecs = Codecs::where('media_type', 'image')->get();
        return View::make('backend.codecs.index', ['url'=> $this->url, 'video_codecs' => $video_codecs, 'image_codecs' => $image_codecs]);
    }

    public function get_singleCodec($id)
    {

    }

    public function delete_codec($id)
    {
        $codec = Codecs::findOrFail($id);
        //Session::flash('message', $codec->name . ' and ' . count($codec->codec_configs) . ' Configurations are deleted!');
        //Session::flash('alert-class', 'success');
        foreach ($codec->codec_configs as $config) {
            $config->delete();
        }
        $codec->delete();

        return redirect('/admin/codecs')->withErrors($codec->name . ' and ' . count($codec->codec_configs) . ' Configurations are deleted!', 'success');
    }

    public function delete_codec_config($id)
    {
        try {

            $codecConfig = CodecConfigs::findOrFail($id);


            $codecConfig->delete();

            return redirect('/admin/codecs')->withErrors($codecConfig->name . ' is deleted', 'success');

        } catch (ModelNotFoundException $e) {
            return redirect('/admin/codecs')->withErrors($codecConfig->name . ' not founded', 'error');
        }
    }

    public function get_codec($id = null)
    {
        try {
            $codec = Codecs::findOrFail($id);
            $title = 'Change Codec';
            $new = false;
        } catch (ModelNotFoundException $e) {
            $codec = new Codecs();
            $title = 'New Codec';
            $new = true;
        }

        return View::make('backend.codecs.codec', ['url' => $this->url, 'codec' => $codec, 'title' => $title, 'new' => $new]);
    }

    public function get_codec_config($id = null, $codec_id = null)
    {

        try {
            $codec_config = CodecConfigs::findOrFail($id);
            $title = 'Change Codec';
            $new = false;
        } catch (ModelNotFoundException $e) {
            $codec_config = new CodecConfigs();
            $title = 'New Codec Configuration';
            $new = true;
            $codec_config->codec = Codecs::findOrFail($codec_id);
        }

        return View::make('backend.codecs.codec_config', ['url' => $this->url, 'codec_config' => $codec_config, 'title' => $title, 'new' => $new]);
    }

    public function update_codec(Request $request, $id)
    {
        $codec = Codecs::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:codecs,name,' . $id . ',codec_id',
            'ffmpeg_codec' => 'required',
            'extension' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $codec->name = $request->name;
        $codec->ffmpeg_codec = $request->ffmpeg_codec;
        $codec->extension = $request->extension;
        $codec->save();

        return redirect('/admin/codecs')->withErrors('codec ' . $codec->name . ' is updated', 'success');
    }

    public function new_codec(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:codecs',
            'ffmpeg_codec' => 'required',
            'media_type' => 'required',
            'extension' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }


        $codec = new Codecs();
        $codec->name = $request->name;
        $codec->ffmpeg_codec = $request->ffmpeg_codec;
        $codec->media_type = $request->media_type;
        $codec->extension = $request->extension;
        $codec->active = true;
        $codec->save();

        return redirect('/admin/codecs')->withInput()->withErrors('codec ' . $codec->name . ' is created', 'success');
    }

    public function update_codec_config(Request $request, $id)
    {

        $codec_config = CodecConfigs::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'codec_id' => 'required',
            'ffmpeg_parameters' => '',
            'ffmpeg_bitrate' => 'required | numeric'
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $codec_config->name = $request->name;
        $codec_config->ffmpeg_parameters = $request->ffmpeg_parameters;
        $codec_config->ffmpeg_bitrate = $request->ffmpeg_bitrate;
        $codec_config->save();

        if ($request->start_transcoding) {
            $media = Media::where('media_type', $codec_config->codec->media_type);
            foreach ($media->cursor() as $item) {

                $job = new Job();
                $job->media_id = $item->media_id;
                $job->codec_config_id = $codec_config->codec_config_id;

                $job->save();

            };
            $rest = new callREST();
            $rest->postStartTranscoding();
        }

        return redirect('/admin/codecs')->withErrors('codec ' . $codec_config->codec->name . ' configuration ' . $codec_config->name . ' is updated', 'success');
    }

    public function new_codec_config(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'codec_id' => 'required',
            'ffmpeg_parameters' => '',
            'ffmpeg_bitrate' => 'required | numeric'
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }


        $codec_config = new CodecConfigs();
        $codec_config->name = $request->name;
        $codec_config->ffmpeg_bitrate = $request->ffmpeg_bitrate;
        $codec_config->ffmpeg_parameters = $request->ffmpeg_parameters;
        $codec_config->codec_id = $request->codec_id;
        $codec_config->active = false;
        $codec_config->save();

        if ($request->start_transcoding) {
            $media = Media::where('media_type', $codec_config->codec->media_type);
            foreach ($media->cursor() as $item) {

                $job = new Job();
                $job->media_id = $item->media_id;
                $job->codec_config_id = $codec_config->codec_config_id;

                $job->save();

            };
            $rest = new callREST();
            $rest->postStartTranscoding();
        }

        return redirect('/admin/codecs')->withInput()->withErrors('codec ' . $codec_config->codec->name . ' configuration ' . $codec_config->name . ' is created', 'success');
    }
}
