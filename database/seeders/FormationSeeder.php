<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert(
            [
                [
                    'name'=>"marketin",
                    'description'=>"analyse marketing",

                ],
                [
                    'name'=>"Langue",
                    'description'=>"Analyse langue",

                ],
                [
                    'name'=>"Math",
                    'description'=>"Aprofondire les notions de math",

                ],
                [
                    'name'=>"EPS",
                    'description'=>"education physique",

                ],
                [
                    'name'=>"Electricite",
                    'description'=>"Creation de chaine electrique",

                ],
                [
                    'name'=>"Chimie",
                    'description'=>"Alchimiste",

                ],
            ]
        );
    }
}
