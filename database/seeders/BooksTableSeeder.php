<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon; // Import Carbon

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('books')->insert([
                'title' => 'Books',
                'description' => 'A book can open a new window of opportunity',
                'author' => 'M Ridwan Zalbina',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        DB::table('books')->insert([
                'title' => 'Learning is a progress',
                'description' => 'Progress to make you stronger, reliable, smarter and tough',
                'author' => 'M Ridwan Zalbina',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}
