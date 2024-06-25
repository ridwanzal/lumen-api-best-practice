<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon; // Import Carbon

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('authors')->insert(
            [
                'name' => 'M. Ridwan Zalbina',
                'gender' => 'male',
                'biography' => 'He is a father of 2. He loves to code. He loves his family.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        DB::table('authors')->insert(
            [
                'name' => 'M. Rifqan Zalbina',
                'gender' => 'male',
                'biography' => 'He is a student of MDP University, 20 years old, wearing glassess, love to code and do fun stuff.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

    }
}
