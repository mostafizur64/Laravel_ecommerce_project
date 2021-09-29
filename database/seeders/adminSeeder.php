<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb1_admin')->insert(
        	'admin_name'=>'mostafizur rahman',
        	'admin_email'=>'mostafizurm01@gmail.com',
        	'admin_password'=>Hash::make('901351'),
        	'admin_phone'=>'01760575664'

        );
    }
}
