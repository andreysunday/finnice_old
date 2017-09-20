<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    private $regions = array();
//    private $slide_names = array();
//    private $region_alias = array();

    public function __construct()
    {
        $this->regions = Config::get('defaults-finnice.regions');
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

        if(is_null(\Fin\Models\Region::all()->first())) {
            $this->call(RegionsTableSeeder::class);
        }

        foreach($this->regions as $key => $item) {
            if($item['reg']) {
                $region_id = \Fin\Models\Region::all()->where('alias',$key)->first();
                //dd($region_id);
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
                //dd($item['reg']['en']);
                DB::table('slide_translations')->insert([
                    'slide_id' => $latest_record->id,
                    'locale' => 'en',
                    'alt' => $item['reg']['en'],
                ]);
                DB::table('slide_translations')->insert([
                    'slide_id' => $latest_record->id,
                    'locale' => 'fi',
                    'alt' => $item['reg']['fi'],
                ]);
                DB::table('slide_translations')->insert([
                    'slide_id' => $latest_record->id,
                    'locale' => 'ru',
                    'alt' => $item['reg']['ru'],
                ]);
            }
        }

    }
}
