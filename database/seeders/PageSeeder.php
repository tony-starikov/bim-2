<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'id' => 1,
                'name' => 'main',
                'title_ua' => 'Revit Modeling Services | Bimprove Company',
                'title_en' => 'Revit Modeling Services | Bimprove Company',
                'description_ua' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
                'description_en' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
            ],
            [
                'id' => 2,
                'name' => 'services',
                'title_ua' => 'Revit Modeling Services | Bimprove Company',
                'title_en' => 'Revit Modeling Services | Bimprove Company',
                'description_ua' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
                'description_en' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
            ],
            [
                'id' => 3,
                'name' => 'portfolio',
                'title_ua' => 'Revit Modeling Services | Bimprove Company',
                'title_en' => 'Revit Modeling Services | Bimprove Company',
                'description_ua' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
                'description_en' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
            ],
            [
                'id' => 4,
                'name' => 'about_us',
                'title_ua' => 'Revit Modeling Services | Bimprove Company',
                'title_en' => 'Revit Modeling Services | Bimprove Company',
                'description_ua' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
                'description_en' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
            ],
            [
                'id' => 5,
                'name' => 'blog',
                'title_ua' => 'Revit Modeling Services | Bimprove Company',
                'title_en' => 'Revit Modeling Services | Bimprove Company',
                'description_ua' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
                'description_en' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
            ],
            [
                'id' => 6,
                'name' => 'contacts',
                'title_ua' => 'Revit Modeling Services | Bimprove Company',
                'title_en' => 'Revit Modeling Services | Bimprove Company',
                'description_ua' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
                'description_en' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
            ],
            [
                'id' => 7,
                'name' => 'products',
                'title_ua' => 'Revit Modeling Services | Bimprove Company',
                'title_en' => 'Revit Modeling Services | Bimprove Company',
                'description_ua' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
                'description_en' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
            ],
            [
                'id' => 8,
                'name' => 'families',
                'title_ua' => 'Revit Modeling Services | Bimprove Company',
                'title_en' => 'Revit Modeling Services | Bimprove Company',
                'description_ua' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
                'description_en' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
            ],
            [
                'id' => 9,
                'name' => 'donate',
                'title_ua' => 'Revit Modeling Services | Bimprove Company',
                'title_en' => 'Revit Modeling Services | Bimprove Company',
                'description_ua' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
                'description_en' => 'We are a 3D BIM Modeling Services Company providing Revit Modeling Services to architectural, engineering, ...',
            ],
        ]);

        if (env('DB_CONNECTION') == 'pgsql'){

            DB::statement("SELECT setval(pg_get_serial_sequence('pages', 'id'), max(id)) FROM pages");

        }
    }
}
