<?php

namespace App\Http\Controllers\Backend;

use App\ConfigData;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Libary\callREST;
use App\Media;
use View;

class MediaController extends Controller
{

    public function __construct()
    {
        $config = ConfigData::getInstance();
        $this->url = $config->media_server;
    }

    public function get_index()
    {

        $video_media = Media::where('media_type', 'video')->get();
        $image_media = Media::where('media_type', 'image')->get();
        dd($video_media[0]->codec_configs);
        return View::make('backend.media.index', ['url'=> $this->url, 'video_media' => $video_media, 'image_media' => $image_media]);
    }

    public function get_media($id)
    {
        try {
            $media = Media::findOrFail($id);
            $new = false;
        } catch (ModelNotFoundException $e) {
            $media = new Media();
            $title = 'New Codec';
            $new = true;
        }
        return View::make('backend.media.media', ['media' => $media, 'new'=>$new, 'title' => 'Update Media']);
    }

    public function upload_media()
    {
        $media = new Media();
        $config = ConfigData::getInstance();

        $rest = new callREST();
        return View::make('backend.media.media', ['media' => $media, 'new' => true, 'title' => 'New Media', 'token' => $rest->getToken(), 'url' => $config->media_server]);
    }

    public function save_media()
    {
        /*$media = new Media();
        return Response::json('success', 200);
        $file = Input::file('file');
        $destinationPath = 'storage';

        $filename = str_random(12);

        $upload_success = Input::file('file')->move($destinationPath, $filename);

        if ($upload_success) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
        //return View::make('backend.media.media', ['media' => $media, 'new'=>true, 'title' => 'New Media']);
        */
    }
}
