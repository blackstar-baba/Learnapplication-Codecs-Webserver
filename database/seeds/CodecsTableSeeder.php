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
        DB::table('codecs')->insert([
            'name' => 'H.264',
            'ffmpeg_codec' => 'libx264',
            'media_type' => 'video',
            'documentation_de' => '',
            'documentation_en' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('codecs')->insert([
            'name' => 'H.265 / HEVC',
            'ffmpeg_codec' => 'libx265',
            'media_type' => 'video',
            'documentation_de' => '',
            'documentation_en' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('codec_configs')->insert([
            'name' => '1000 kbit/s',
            'codec_id' => 1,
            'ffmpeg_parameters' => '-b 1000',
            'active' => false,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}