<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('App\Roles');

        DB::table('roles')->insert([
            'name' => 'admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'teacher',
        ]);

        DB::table('roles')->insert([
            'name' => 'student',
        ]);

    }
}
