<?php

use Illuminate\Database\Seeder;

class NavigationsTableSeeder extends Seeder
{
    private $name_en = array();
    private $nameReg_en = array();

    private $name_fi = array();
    private $nameReg_fi = array();

    private $name_ru = array();
    private $nameReg_ru = array();

    public function __construct() {

        $this->name_en = ['Home','Regions','History','Blog'];
        $this->nameReg_en = [
            'Aland Islands','Lapland','Northern Ostrobothnia','Kainuu','North Karelia',
            'Northern Savonia','Southern Savonia','Southern Ostrobothnia','Central Ostrobothnia','Ostrobothnia',
            'Pirkanmaa','Central Finland','Satakunta','Southwest Finland','South Karelia',
            'Paijanne Tavastia','Tavastia Proper','Uusimaa','Kymenlaakso'
        ];
        $this->nameReg_fi = [
            'Ahvenanmaa','Lapi','Pohjois-Pohjanmaa','Kainuu','Pohjois-Karjala',
            'Pohjois-Savo','Etelä-Savo','Etelä-Pohjanmaa','Keski-Pohjanmaa','Pohjanmaa',
            'Pirkanmaa','Keski-Suomi','Satakunta','Varsinais-Suomi','Etelä-Karjala',
            'Päijät-Häme','Kanta-Häme','Uusimaa','Kymenlaakso'
        ];
        $this->nameReg_ru = [
            'Аландские острова','Лапландия','Северная Остроботния','Кайнуу','Северная Карелия',
            'Северное Саво','Южное Саво','Южная Остроботния','Центральная Остроботния','Остроботния',
            'Пирканмаа','Центральная Финляндия','Сатакунта','Исконная Финляндия','Южная Карелия',
            'Пя́йят-Хя́ме','Канта-Хяме','Уусимаа','Кюменлааксо'
        ];

        $this->name_fi = ['Etusivu','Maakunnan','Historia','Blogi'];

        $this->name_ru = ['Главная','Регионы','История','Блог'];

        $this->name_first_en = [];

    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numName = count($this->name_en);
        $numNameReg = count($this->nameReg_en);

//        dd($numName);

        DB::table('navigations')->delete();
        DB::table('navigation_translations')->delete();

        $item=0;

        while ($item < $numName) {
            DB::table('navigations')->insert([
                'parent_id' => 0,
                'alias' => 'alias',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $navigation = DB::table('navigations')->where('id', DB::getPdo()->lastInsertId())->first();

            DB::table('navigation_translations')->insert([
                'navigation_id' => $navigation->id,
                'locale' => 'en',
                'name' => $this->name_en[$item],
            ]);

            DB::table('navigations')
                ->where('id', $navigation->id)
                ->update(['alias' => strtolower($this->name_en[$item])]);

            DB::table('navigation_translations')->insert([
                'navigation_id' => $navigation->id,
                'locale' => 'fi',
                'name' => $this->name_fi[$item],
            ]);
            DB::table('navigation_translations')->insert([
                'navigation_id' => $navigation->id,
                'locale' => 'ru',
                'name' => $this->name_ru[$item],
            ]);

            $item++;
        }

        $region = DB::table('navigations')->where('alias', 'regions')->first();

        $item=0;

        while ($item < $numNameReg) {
            DB::table('navigations')->insert([
                'parent_id' => $region->id,
                'alias' => 'alias',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $navigation = DB::table('navigations')->where('id', DB::getPdo()->lastInsertId())->first();

            DB::table('navigation_translations')->insert([
                'navigation_id' => $navigation->id,
                'locale' => 'en',
                'name' => $this->nameReg_en[$item],
            ]);

            DB::table('navigations')
                ->where('id', $navigation->id)
                ->update(['alias' => str_slug($this->nameReg_en[$item], "-")]);

            DB::table('navigation_translations')->insert([
                'navigation_id' => $navigation->id,
                'locale' => 'fi',
                'name' => $this->nameReg_fi[$item],
            ]);
            DB::table('navigation_translations')->insert([
                'navigation_id' => $navigation->id,
                'locale' => 'ru',
                'name' => $this->nameReg_ru[$item],
            ]);

            $item++;
        }
    }
}
