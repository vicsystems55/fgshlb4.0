<?php

use Illuminate\Database\Seeder;

class LoanTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('loan_types')->insertOrIgnore([

            [
                'name' => 'BUILDING LOAN',
                'description' => ''
            ],

            [
                'name' => 'FISH LOAN',
                'description' => '',
            ],

            [
                'name' => 'PURCHASING LOAN',
                'description' => '',
            ],

            [
                'name' => 'HOME RENOVATION LOAN',
                'description' => '',
            ],
        ]);
    }
}
