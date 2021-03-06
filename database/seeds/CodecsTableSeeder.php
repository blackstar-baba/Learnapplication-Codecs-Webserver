<?php

use Illuminate\Database\Seeder;

class CodecsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ### H.264
        DB::table('codecs')->insert([ # id: 1
            'name' => 'H.264',
            'ffmpeg_codec' => 'libx264',
            'extension' => 'mp4',
            'media_type' => 'video',
            'documentation_compare' => '',
            'documentation_full' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '5000 kbit/s',
            'codec_id' => 1,
            'ffmpeg_bitrate' => '5000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '2000 kbit/s',
            'codec_id' => 1,
            'ffmpeg_bitrate' => '2000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '1000 kbit/s',
            'codec_id' => 1,
            'ffmpeg_bitrate' => '1000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '750 kbit/s',
            'codec_id' => 1,
            'ffmpeg_bitrate' => '750',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '500 kbit/s',
            'codec_id' => 1,
            'ffmpeg_bitrate' => '500',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '400 kbit/s',
            'codec_id' => 1,
            'ffmpeg_bitrate' => '400',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '300 kbit/s',
            'codec_id' => 1,
            'ffmpeg_bitrate' => '300',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '250 kbit/s',
            'codec_id' => 1,
            'ffmpeg_bitrate' => '250',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        ### VP8
        DB::table('codecs')->insert([ # id: 2
            'name' => 'VP8',
            'ffmpeg_codec' => 'libvpx',
            'extension' => 'webm',
            'media_type' => 'video',
            'documentation_compare' => '',
            'documentation_full' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '5000 kbit/s',
            'codec_id' => 2,
            'ffmpeg_bitrate' => '5000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '2000 kbit/s',
            'codec_id' => 2,
            'ffmpeg_bitrate' => '2000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '1000 kbit/s',
            'codec_id' => 2,
            'ffmpeg_bitrate' => '1000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '750 kbit/s',
            'codec_id' => 2,
            'ffmpeg_bitrate' => '750',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '500 kbit/s',
            'codec_id' => 2,
            'ffmpeg_bitrate' => '500',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '400 kbit/s',
            'codec_id' => 2,
            'ffmpeg_bitrate' => '400',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '300 kbit/s',
            'codec_id' => 2,
            'ffmpeg_bitrate' => '300',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '250 kbit/s',
            'codec_id' => 2,
            'ffmpeg_bitrate' => '250',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);


        ### VP 9
        DB::table('codecs')->insert([ # id: 3
            'name' => 'VP9',
            'ffmpeg_codec' => 'libvpx-vp9',
            'extension' => 'webm',
            'media_type' => 'video',
            'documentation_compare' => '',
            'documentation_full' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '5000 kbit/s',
            'codec_id' => 3,
            'ffmpeg_bitrate' => '5000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '2000 kbit/s',
            'codec_id' => 3,
            'ffmpeg_bitrate' => '2000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '1000 kbit/s',
            'codec_id' => 3,
            'ffmpeg_bitrate' => '1000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '750 kbit/s',
            'codec_id' => 3,
            'ffmpeg_bitrate' => '750',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '500 kbit/s',
            'codec_id' => 3,
            'ffmpeg_bitrate' => '500',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '400 kbit/s',
            'codec_id' => 3,
            'ffmpeg_bitrate' => '400',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '300 kbit/s',
            'codec_id' => 3,
            'ffmpeg_bitrate' => '300',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '250 kbit/s',
            'codec_id' => 3,
            'ffmpeg_bitrate' => '250',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);


        # mpeg2
        DB::table('codecs')->insert([ # id: 4
            'name' => 'mpeg2',
            'ffmpeg_codec' => 'mpeg2video',
            'extension' => 'mp4',
            'media_type' => 'video',
            'documentation_compare' => '',
            'documentation_full' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'convert' => true
        ]);
        DB::table('codec_configs')->insert([
            'name' => '5000 kbit/s',
            'codec_id' => 4,
            'ffmpeg_bitrate' => '5000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '2000 kbit/s',
            'codec_id' => 4,
            'ffmpeg_bitrate' => '2000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '1000 kbit/s',
            'codec_id' => 4,
            'ffmpeg_bitrate' => '1000',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '750 kbit/s',
            'codec_id' => 4,
            'ffmpeg_bitrate' => '750',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '500 kbit/s',
            'codec_id' => 4,
            'ffmpeg_bitrate' => '500',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '400 kbit/s',
            'codec_id' => 4,
            'ffmpeg_bitrate' => '400',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '300 kbit/s',
            'codec_id' => 4,
            'ffmpeg_bitrate' => '300',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '250 kbit/s',
            'codec_id' => 4,
            'ffmpeg_bitrate' => '250',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        
        
        ### JPG
        DB::table('codecs')->insert([ # id: 5
            'name' => 'jpg',
            'ffmpeg_codec' => 'jpg',
            'extension' => 'jpg',
            'media_type' => 'image',
            'documentation_compare' => '',
            'documentation_full' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '100%',
            'codec_id' => 5,
            'ffmpeg_bitrate' => '100',
            'ffmpeg_parameters' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '75%',
            'codec_id' => 5,
            'ffmpeg_bitrate' => '75',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '50%',
            'codec_id' => 5,
            'ffmpeg_bitrate' => '50',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '40%',
            'codec_id' => 5,
            'ffmpeg_bitrate' => '40',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '35%',
            'codec_id' => 5,
            'ffmpeg_bitrate' => '35',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '30%',
            'codec_id' => 5,
            'ffmpeg_bitrate' => '30',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '25%',
            'codec_id' => 5,
            'ffmpeg_bitrate' => '25',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '20%',
            'codec_id' => 5,
            'ffmpeg_bitrate' => '20',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '15%',
            'codec_id' => 5,
            'ffmpeg_bitrate' => '15',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '10%',
            'codec_id' => 5,
            'ffmpeg_bitrate' => '10',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        
        
        ### PNG
        DB::table('codecs')->insert([ # id: 6
            'name' => 'png',
            'ffmpeg_codec' => 'png',
            'extension' => 'png',
            'media_type' => 'image',
            'documentation_compare' => '',
            'documentation_full' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => 'compression level 0 ',
            'codec_id' => 6,
            'ffmpeg_bitrate' => '9',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
        
        
        ### JPG2000
        DB::table('codecs')->insert([ # id: 7
            'name' => 'jpg2000',
            'ffmpeg_codec' => 'jp2',
            'extension' => 'jp2',
            'media_type' => 'image',
            'documentation_compare' => '',
            'documentation_full' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'convert' => true
        ]);
        DB::table('codec_configs')->insert([
            'name' => '100%',
            'codec_id' => 7,
            'ffmpeg_bitrate' => '100',
            'ffmpeg_parameters' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '75%',
            'codec_id' => 7,
            'ffmpeg_bitrate' => '75',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '50%',
            'codec_id' => 7,
            'ffmpeg_bitrate' => '50',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '40%',
            'codec_id' => 7,
            'ffmpeg_bitrate' => '40',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '35%',
            'codec_id' => 7,
            'ffmpeg_bitrate' => '35',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '30%',
            'codec_id' => 7,
            'ffmpeg_bitrate' => '30',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codec_configs')->insert([
            'name' => '25%',
            'codec_id' => 7,
            'ffmpeg_bitrate' => '25',
            'ffmpeg_parameters' => '',

            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);


    }
}
