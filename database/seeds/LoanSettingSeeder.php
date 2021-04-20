<?php

use Illuminate\Database\Seeder;

class LoanSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('loan_settings')->insertOrIgnore([

            [
                'percent_interest' => 3
            ]
        ]);
    }
}
