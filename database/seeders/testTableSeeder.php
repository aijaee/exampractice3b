<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class testTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tests')->insert([
            'name'=> 'test 1',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('tests')->insert([
            'name'=> 'test 2',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);

        DB::table('tests')->insert([
            'name'=> 'test 3',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);
    }
}
