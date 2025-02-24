<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("seasons")->delete();
        $seasons = [
            '春',
            '夏',
            '秋',
            '冬',
        ];
        foreach ($seasons as $season) {
            DB::table('seasons')->insert([
                'seasons' => $season,
            ]);
        }
    }
}
