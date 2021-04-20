<?php

use Illuminate\Database\Seeder;

class LoanCeilingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('loan_ceilings')->insertOrIgnore([

                [
                'grade_level'=>'7',
                'approved_ceiling'=>'1500000',
                ],

                [

                'grade_level'=>'8',
                'approved_ceiling'=>'3000000',
               
                
                ],

                [
                
                'grade_level'=>'9',
                'approved_ceiling'=>'3500000',
                
                ],

                [
                
                'grade_level'=>'10',
                'approved_ceiling'=>'4000000',
               
                
                ],

                [
                
                    'grade_level'=>'11',
                    'approved_ceiling'=>'4000000',
                   
                    
                ],

                [
                
                'grade_level'=>'12',
                'approved_ceiling'=>'4500000',
               
                
                ],

                [
                
                'grade_level'=>'13',
                'approved_ceiling'=>'5000000',
               
                ],

                [
                
                'grade_level'=>'14',
                'approved_ceiling'=>'5500000',
                
                
                ],

                [
                
                'grade_level'=>'15',
                'approved_ceiling'=>'6000000',
               
                
                ],

                [
                
                'grade_level'=>'16',
                'approved_ceiling'=>'6500000',
              
                
                ],

                [
                
                'grade_level'=>'17',
                'approved_ceiling'=>'8000000',
             
        
                ],  

                [
                
                'grade_level'=>'PS & OTHERS',
                'approved_ceiling'=>'15000000',
            
                
                ],
        ]);
    }
}
