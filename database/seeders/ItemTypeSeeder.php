<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_types')->insert([
            [
                'id' => 1,
                'type' => 'paragraph',
            ],
            [
                'id' => 2,
                'type' => 'topic',
            ],
            [
                'id' => 3,
                'type' => 'image',
            ],
            [
                'id' => 4,
                'type' => 'video_url',
            ],
        ]);
    }
}
