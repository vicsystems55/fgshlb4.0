<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insertOrIgnore([

            [
                'id' => '10001',
                'firstname' => 'Festus',
               
                'surname' => 'Boman',
                'email' => 'admin001@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Super-Admin',
                'type' => 'standard',
                'ippis_no' => '11-22-33-44',
                'file_no' => 'FGSHLB-2020-2300',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

          

            [
                'id' => '10003',
                'firstname' => 'Sample',
                'surname' => 'DeskOffice',
                'email' => 'deskofficer@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'military',
                'ippis_no' => '11-22-33-46',
                'file_no' => 'FGSHLB-2020-2311',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10003',
                'firstname' => 'Sample',
                'surname' => 'DeskOffice8',
                'email' => 'deskofficer6@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'ministry',
                'ippis_no' => '11-22-33-99',
                'file_no' => 'FGSHLB-2020-4000',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10033',
                'firstname' => 'Desk Officer',
                'surname' => 'Military',
                'email' => 'deskofficer2@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'military',
                'ippis_no' => '11-22-33-47',
                'file_no' => 'FGSHLB-2020-2332',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10044',
                'firstname' => 'Desk Officer',
                'surname' => 'Parastatal',
                'email' => 'deskofficer3@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'parastatal',
                'ippis_no' => '11-22-33-48',
                'file_no' => 'FGSHLB-2020-2310',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10055',
                'firstname' => 'Desk',
                'surname' => 'Officer Miinistry',
                'email' => 'deskofficer4@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'ministry',
                'ippis_no' => '11-22-33-49',
                'file_no' => 'FGSHLB-2020-2390',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10066',
                'firstname' => 'Desk',
                'surname' => 'Officer Mortgage',
                'email' => 'deskofficer5@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Desk-Officer',
                'type' => 'mortgage',
                'ippis_no' => '11-22-33-50',
                'file_no' => 'FGSHLB-2020-2356',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10004',
                'firstname' => 'Accounts',
                'surname' => 'Office',
                'email' => 'accountsoffice@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Accounts',
                'type' => 'standard',
                'ippis_no' => '11-22-33-90',
                'file_no' => 'FGSHLB-2020-3303',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10005',
                'firstname' => 'Applicant',
                'surname' => '002',
                'email' => 'user2@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Applicant',
                'type' => 'standard',
                'ippis_no' => '11-22-33-88',
                'file_no' => 'FGSHLB-2020-2200',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '10006',
                'firstname' => 'Applicant',
                'surname' => '001',
                'email' => 'user1@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('passmyword'),
                
                'email_verified_at' => now(),
                'role' => 'Applicant',
                'type' => 'standard',
                'ippis_no' => '11-22-33-1',
                'file_no' => 'FGSHLB-2020-3300',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '8888',
                'firstname' => 'Ibrahim',
                'surname' => 'Mairiga',
                'email' => 'executivesecretary@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('executivesecretary2020'),
                
                'email_verified_at' => now(),
                'role' => 'EsOffice',
                'type' => 'standard',
                'ippis_no' => '*****',
                'file_no' => 'FGSHLB-2020-****',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '9999',
                'firstname' => 'Salamatu',
                'surname' => 'Ahmed',
                'email' => 'headofoperations@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('headofoperations2020'),
                
                'email_verified_at' => now(),
                'role' => 'HeadOfOperations',
                'type' => 'standard',
                'ippis_no' => '*****##',
                'file_no' => 'FGSHLB-2020-****##',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '2121',
                'firstname' => 'Loans',
                'surname' => 'Accounts1',
                'email' => 'loansaccounts1@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('loansaccounts2020'),
                
                'email_verified_at' => now(),
                'role' => 'LoansAccounts',
                'type' => 'standard',
                'ippis_no' => '****###',
                'file_no' => 'FGSHLB-2020-***###',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '090999',
                'firstname' => 'Checking',
                'surname' => 'Office1',
                'email' => 'checking1@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('checking2020'),
                
                'email_verified_at' => now(),
                'role' => 'Checking',
                'type' => 'standard',
                'ippis_no' => '***####',
                'file_no' => 'FGSHLB-2020-**####',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '667766',
                'firstname' => 'Internal',
                'surname' => 'Auditor1',
                'email' => 'auditor1@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('auditor2020'),
                
                'email_verified_at' => now(),
                'role' => 'InternalAuditor',
                'type' => 'standard',
                'ippis_no' => '*######',
                'file_no' => 'FGSHLB-2020-######',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '8899292',
                'firstname' => 'Central',
                'surname' => 'Pay Office1',
                'email' => 'cpo1@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('auditor2020'),
                
                'email_verified_at' => now(),
                'role' => 'CPO',
                'type' => 'standard',
                'ippis_no' => '#######',
                'file_no' => 'FGSHLB-2020-#######',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '8899292',
                'firstname' => 'Repayment',
                'surname' => 'Unit',
                'email' => 'repaymentunit1@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('repaymentunit2020'),
                
                'email_verified_at' => now(),
                'role' => 'RepaymentUnit',
                'type' => 'standard',
                'ippis_no' => '########',
                'file_no' => 'FGSHLB-2020-########',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'id' => '772782',
                'firstname' => 'ICT',
                'surname' => 'Staff1',
                'email' => 'ict1@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('information2020'),
                
                'email_verified_at' => now(),
                'role' => 'ICT',
                'type' => 'standard',
                'ippis_no' => '#########',
                'file_no' => 'FGSHLB-2020-#########',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '338289',
                'firstname' => 'ICT',
                'surname' => 'staff2',
                'email' => 'ict2@fgshlb.loans',
                
                'email_verified_at' => now(),
                'password' =>  Hash::make('information2020'),
                
                'email_verified_at' => now(),
                'role' => 'ICT',
                'type' => 'standard',
                'ippis_no' => '$#########',
                'file_no' => 'FGSHLB-2020-$#########',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
