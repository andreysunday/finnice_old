<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    private $regions = array();
    private $slides = array();

    public function __construct()
    {
        if(is_null(\Fin\Models\Region::first())) {
            $this->call(RegionsTableSeeder::class);
        }
        $this->regions = Config::get('defaults-finnice.regions');
        $this->slides = Config::get('defaults-finnice.slides');
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->delete();
        DB::table('slide_translations')->delete();

        foreach($this->regions as $key => $item) {
            //dd($this->slides[$key]);
            if($item['reg']) {
                $region_id = \Fin\Models\Region::all()->where('alias',$key)->first();
                //dd($key);
                DB::table('slides')->insert([
                    'mod' => 'seed',
                    'region_id' => $region_id->id,
                    'alias' => 'reg-' . $key,
                    'image_name' => 'slide-' . $key . '-1',
                    'image_extension' => 'jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);

                $latest_record = DB::table('slides')->where('id', DB::getPdo()->lastInsertId())->first();
                //dd($this->slides['la']);
                DB::table('slide_translations')->insert([
                    'slide_id' => $latest_record->id,
                    'locale' => 'en',
                    'title' => $this->slides[$key]['title']['en'],
                    'alt' => $item['reg']['en'],
                    'text' => $this->slides[$key]['text']['en'],
                ]);
                DB::table('slide_translations')->insert([
                    'slide_id' => $latest_record->id,
                    'locale' => 'fi',
                    'title' => $this->slides[$key]['title']['fi'],
                    'alt' => $item['reg']['fi'],
                    'text' => $this->slides[$key]['text']['fi'],
                ]);
                DB::table('slide_translations')->insert([
                    'slide_id' => $latest_record->id,
                    'locale' => 'ru',
                    'title' => $this->slides[$key]['title']['ru'],
                    'alt' => $item['reg']['ru'],
                    'text' => $this->slides[$key]['text']['ru'],
                ]);
            }
        }

    }
}
