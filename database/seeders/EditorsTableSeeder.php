<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EditorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('editors')->insert([
            'user_id' => 1,
            'title' => 'Sample Pen 1',
            'htmlcode' => '<h1>Sample Pen 1</h1>',
            'csscode' => 'h1{font-size:100px; color:red;}',
            'jscode' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('editors')->insert([
            'user_id' => 2,
            'title' => 'Sample Pen 2',
            'htmlcode' => '<h1>Sample Pen 2</h1>',
            'csscode' => 'h1{font-size:100px; color:red;}',
            'jscode' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('editors')->insert([
            'user_id' => 1,
            'title' => 'Sample Pen 3',
            'htmlcode' => '<h1>Sample Pen 3</h1>',
            'csscode' => 'h1{font-size:100px; color:red;}',
            'jscode' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('editors')->insert([
            'user_id' => 3,
            'title' => 'Sample Pen 4',
            'htmlcode' => '<h1>Sample Pen 4</h1>',
            'csscode' => 'h1{font-size:100px; color:red;}',
            'jscode' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('editors')->insert([
            'user_id' => 4,
            'title' => 'Sample Pen 5',
            'htmlcode' => '<h1>Sample Pen 5</h1>',
            'csscode' => 'h1{font-size:100px; color:red;}',
            'jscode' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}