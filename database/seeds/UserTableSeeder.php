<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Seeder for users table
     * It creates 3 difrent users
     * a Student an Admin and a company 
     * remember to run the following commands:
     * 			composer dumpautoload
     * 			php artisan migrate:refresh --seed
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = User::Create([
        	  'name'=> "Admin",
        	  'email'=>'noureddine.ouboullah@gmail.com',
        	  'password'=>bcrypt('123456'),
        	  'type'=>"admin",
        	]);


        $userStudent = User::Create([
        	  'name'=> "student1",
        	  'email'=>'test@test.com',
        	  'password'=>bcrypt('123456'),
        	  'type'=>"student",
        	]);


        $userCompany = User::Create([
        	  'name'=> "company1",
        	  'email'=>'test1@test.com',
        	  'password'=>bcrypt('123456'),
        	  'type'=>"company",
        	]);
    }
}
