<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'id' => '612313001',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'adviser_id' => 'FG01'
        ]);
        DB::table('students')->insert([
            'id' => '612313002',
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'adviser_id' => 'FG01'
        ]);
        DB::table('students')->insert([
            'id' => '612313003',
            'first_name' => 'Abe',
            'last_name' => 'Takakazu',
            'adviser_id' => 'FG02'
        ]);
    }
}
