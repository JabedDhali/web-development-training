<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(
            [
                [
                    'name' => 'Entertainment',
                ],
                [
                    'name' => 'Scient Fiction',
                ]
            ]
        );
        DB::table('blogs')->insert(
            [
                [
                    'title' => 'Boss Er Boi',
                    'author' => 'Boss Plabon',
                    'category_id' => 1
                ]
            ]
        );
    }
}
