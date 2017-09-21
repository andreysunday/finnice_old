<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    private $regions = array();
    private $image_names = array();
    private $region_keys = array();

    public function __construct()
    {
        //$this->regions = Config::get('defaults-finnice.regions.region-name');
        $this->regions = Config::get('defaults-finnice.regions');
        $this->image_names = Config::get('defaults-finnice.slide-images.image-name');
        //$this->region_keys = array_keys($this->regions);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->delete();
        DB::table('region_translations')->delete();

        foreach($this->regions as $key => $region) {
            DB::table('regions')->insert([
                'mod' => 'seed',
                'alias' => $key,
                'image_name' => 'arms-reg-' . $key,
                'image_extension' => 'png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $latest_record = DB::table('regions')->where('id', DB::getPdo()->lastInsertId())->first();

            DB::table('region_translations')->insert([
                'region_id' => $latest_record->id,
                'locale' => 'en',
                'name' => $region['reg']['en'],
            ]);

            DB::table('region_translations')->insert([
                'region_id' => $latest_record->id,
                'locale' => 'fi',
                'name' => $region['reg']['fi'],
            ]);

            DB::table('region_translations')->insert([
                'region_id' => $latest_record->id,
                'locale' => 'ru',
                'name' => $region['reg']['ru'],
            ]);
        }
    }
}
