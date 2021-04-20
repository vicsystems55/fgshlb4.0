<?php

use Illuminate\Database\Seeder;

class FederalMinistrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('federal_ministries')->insertOrIgnore([
            [
                'title' => 'Environment, Housing and Urban Development',
                'details' => '',
            ],

            [
                'title' => 'Federal Capital Territory',
                'details' => '',
            ],

            [
                'title' => 'Finance',
                'details' => '',
            ],

            [
                'title' => 'Foreign Affairs',
                'details' => '',
            ],

            [
                'title' => 'Health',
                'details' => '',
            ],

            [
                'title' => 'Information and Communications',
                'details' => '',
            ],

            [
                'title' => 'Interior',
                'details' => '',
            ],

            [
                'title' => 'Justice',
                'details' => '',
            ],

            [
                'title' => 'Labour and Productivity',
                'details' => '',
            ],

            [
                'title' => 'Mines and Steel Development',
                'details' => '',
            ],

            [
                'title' => 'National Planning Commission (Presidency)',
                'details' => '',
            ],

            [
                'title' => 'National Sports Commission (Presidency)',
                'details' => '',
            ],

            [
                'title' => 'Presidency',
                'details' => '',
            ],

            [
                'title' => 'Science and Technology',
                'details' => '',
            ],

            [
                'title' => 'Transport',
                'details' => '',
            ],

            [
                'title' => 'Water Resources and Rural Development',
                'details' => '',
            ],

            [
                'title' => 'Works and Housing',
                'details' => '',
            ],

            [
                'title' => 'Youth Sports',
                'details' => '',
            ],

         
        ]);
    }
}

