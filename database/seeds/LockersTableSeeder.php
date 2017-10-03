<?php

use Illuminate\Database\Seeder;

class LockersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lockers')->insert([
            'id' => 'A1',
            'student_id' => '612313001'
        ]);
        DB::table('lockers')->insert([
            'id' => 'A2',
            'student_id' => '612313002'
        ]);
        DB::table('lockers')->insert([
            'id' => 'B1',
            'student_id' => '612313003'
        ]);
    }
}
