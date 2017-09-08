<?php

use Illuminate\Database\Seeder;

class NavigationsTableSeeder extends Seeder
{
    private $name_en = array();
    private $nameReg_en = array();
    private $nameHis0_en = array();
    private $nameHis1_en = array();

    private $name_fi = array();
    private $nameReg_fi = array();
    private $nameHis0_fi = array();
    private $nameHis1_fi = array();

    private $name_ru = array();
    private $nameReg_ru = array();
    private $nameHis0_ru = array();
    private $nameHis1_ru = array();

    public function __construct() {

        $this->initNavigation();

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
        $numNameHis0 = count($this->nameHis0_en);

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

        if($region) {
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

        $history = DB::table('navigations')->where('alias', 'history')->first();

        if($history) {
            $item = 0;

            while($item < $numNameHis0) {
                DB::table('navigations')->insert([
                    'parent_id' => $history->id,
                    'alias' => 'alias',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);

                $navigation = DB::table('navigations')->where('id', DB::getPdo()->lastInsertId())->first();

                DB::table('navigation_translations')->insert([
                    'navigation_id' => $navigation->id,
                    'locale' => 'en',
                    'name' => $this->nameHis0_en[$item],
                ]);

                DB::table('navigations')
                    ->where('id', $navigation->id)
                    ->update(['alias' => str_slug($this->nameHis0_en[$item], "-")]);

                DB::table('navigation_translations')->insert([
                    'navigation_id' => $navigation->id,
                    'locale' => 'fi',
                    'name' => $this->nameHis0_fi[$item],
                ]);
                DB::table('navigation_translations')->insert([
                    'navigation_id' => $navigation->id,
                    'locale' => 'ru',
                    'name' => $this->nameHis0_ru[$item],
                ]);

                $history0 = DB::table('navigations')->where('id', $navigation->id)->first();

                $numNameHis1 = count($this->nameHis1_en[$item]);

                $item0 = 0;

                while($item0 < $numNameHis1) {
                    DB::table('navigations')->insert([
                        'parent_id' => $history0->id,
                        'alias' => 'alias',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);

                    $navigation = DB::table('navigations')->where('id', DB::getPdo()->lastInsertId())->first();

                    DB::table('navigation_translations')->insert([
                        'navigation_id' => $navigation->id,
                        'locale' => 'en',
                        'name' => $this->nameHis1_en[$item][$item0],
                    ]);

                    DB::table('navigations')
                        ->where('id', $navigation->id)
                        ->update(['alias' => str_slug($this->nameHis1_en[$item][$item0], "-")]);

                    DB::table('navigation_translations')->insert([
                        'navigation_id' => $navigation->id,
                        'locale' => 'fi',
                        'name' => $this->nameHis1_fi[$item][$item0],
                    ]);
                    DB::table('navigation_translations')->insert([
                        'navigation_id' => $navigation->id,
                        'locale' => 'ru',
                        'name' => $this->nameHis1_ru[$item][$item0],
                    ]);

                    $item0++;
                }

                $item++;

            }

        }
    }

    private function initNavigation()
    {
        $this->name_en = ['Home','Regions','History','Blog'];
        $this->nameReg_en = [
            'Aland Islands','Lapland','Northern Ostrobothnia','Kainuu','North Karelia',
            'Northern Savonia','Southern Savonia','Southern Ostrobothnia','Central Ostrobothnia','Ostrobothnia',
            'Pirkanmaa','Central Finland','Satakunta','Southwest Finland','South Karelia',
            'Paijanne Tavastia','Tavastia Proper','Uusimaa','Kymenlaakso'
        ];
        $this->nameHis0_en = ['Prehistoric Finland','Swedish period','Duchy of Finland'];
        $this->nameHis1_en = [
            '0' => ['First People','Ceramics & Axes','The Bronze Age','the Iron Age','Crusades'],
            '1' => [
                'Catholic Church','Swedish Crown','Class Society','Strengthening state','Reformation Church',
                'Swedish Empire','Finland formation','Nationak ascent'
            ],
            '2' => [
                'Russian conquest','Creation of Duchy','Nationalism growth','Finnish language','Dushy\'s population',
                'Duchy\'s economy','Church and religion','Women\'s independece'
            ]
        ];

        $this->nameReg_fi = [
            'Ahvenanmaa','Lapi','Pohjois-Pohjanmaa','Kainuu','Pohjois-Karjala',
            'Pohjois-Savo','Etelä-Savo','Etelä-Pohjanmaa','Keski-Pohjanmaa','Pohjanmaa',
            'Pirkanmaa','Keski-Suomi','Satakunta','Varsinais-Suomi','Etelä-Karjala',
            'Päijät-Häme','Kanta-Häme','Uusimaa','Kymenlaakso'
        ];
        $this->nameHis0_fi = ['Esihistoriallinen Suomi','Ruotsin ajan','Suomen suuriruhtinaskunta'];
        $this->nameHis1_fi = [
            '0' => ['First People','Ceramics & Axes','The Bronze Age','the Iron Age','Crusades'],
            '1' => [
                'Catholic Church','Swedish Crown','Class Society','Strengthening state','Reformation Church',
                'Swedish Empire','Finland formation','National ascent'
            ],
            '2' => [
                'Russian conquest','Creation of Duchy','Nationalism growth','Finnish language','Dushy\'s population',
                'Duchy\'s economy','Church and religion','Women\'s independece'
            ]
        ];

        $this->nameReg_ru = [
            'Аландские острова','Лапландия','Северная Остроботния','Кайнуу','Северная Карелия',
            'Северное Саво','Южное Саво','Южная Остроботния','Центральная Остроботния','Остроботния',
            'Пирканмаа','Центральная Финляндия','Сатакунта','Исконная Финляндия','Южная Карелия',
            'Пя́йят-Хя́ме','Канта-Хяме','Уусимаа','Кюменлааксо'
        ];
        $this->nameHis0_ru = ['Доисторическая Финляндия','Шведский период','Княжество Финляндское'];
        $this->nameHis1_ru = [
            '0' => ['Первые люди','Керамики и топоры','Бронзовый век','Железный век','Крестовые походы'],
            '1' => [
                'Католическая церковь','Шведская корона','Классовое общество','Укрепление государства','Реформация церкви',
                'Шведская империя','Формирование Финляндии','Национальный подъем'
            ],
            '2' => [
                'Захват Россией ','Создание княжества','Рост национализма','Финский язык','Население княжества',
                'Экономика княжества','Церковь и религия','Женская независимость'
            ]
        ];

        $this->name_fi = ['Etusivu','Maakunnan','Historia','Blogi'];

        $this->name_ru = ['Главная','Регионы','История','Блог'];
    }
}
