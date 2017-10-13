<?php

use Illuminate\Database\Seeder;

class AdvisersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advisers')->insert([
            'id' => 'FG01',
            'first_name' => 'Parn',
            'last_name' => 'Matanukum'
        ]);

        DB::table('advisers')->insert([
            'id' => 'FG02',
            'first_name' => 'Getapong',
            'last_name' => 'Somyoam'
        ]);
    }
}
