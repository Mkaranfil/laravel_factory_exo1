<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_formations')->insert(
            [
                [
                    'name'=>"Developer",

                ],
                [
                    'name'=>"Marketing digital",

                ],
                [
                    'name'=>"chimiste",

                ],
                [
                    'name'=>"Pharma",

                ],
                [
                    'name'=>"analyste",

                ],
                [
                    'name'=>"Cryptomonnaie",

                ],
                [
                    'name'=>"constructeur",

                ],
                [
                    'name'=>"DM",

                ],
                [
                    'name'=>"pompier",

                ],
                [
                    'name'=>"secouriste",

                ],
            ]
        );
    }
}
