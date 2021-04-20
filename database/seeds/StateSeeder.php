<?php

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('states')->insertOrIgnore([
            'name' => 'Abia',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Adamawa',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Akwa-Ibom',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Anambra',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Bauchi',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Bayelsa',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Benue',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Borno',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Cross-River',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Delta',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Ebonyi',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Edo',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Ekiti',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Enugu',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Gombe',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Imo',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Jigawa',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Kaduna',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Kano',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Katsina',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Kebbi',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Kogi',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Kwara',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Lagos',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Nasarrawa',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Niger',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Ogun',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Ondo',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Osun',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Oyo',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Plateau',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Rivers',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Sokoto',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Taraba',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Yobe',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'Zamfara',
        ]);

        DB::table('states')->insertOrIgnore([
            'name' => 'FCT',
        ]);
    }
}
