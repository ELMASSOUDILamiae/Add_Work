<?php

use App\User;
use App\Admin;
use App\Entreprise;
use App\Etudiant;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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

        $Admin = Admin::Create([
                'user_id' => $userAdmin->id,
            ]);


        $userStudent = User::Create([
        	  'name'=> "student1",
        	  'email'=>'test@test.com',
        	  'password'=>bcrypt('123456'),
        	  'type'=>"student",
        	]);

        $Student = Etudiant::Create([
                "user_id" => $userStudent->id,
            ]);


        $userCompany = User::Create([
        	  'name'=> "company1",
        	  'email'=>'test1@test.com',
        	  'password'=>bcrypt('123456'),
        	  'type'=>"company",
        	]);

        $company = Entreprise::create([
                'user_id' => $userCompany->id,
            ]);
    }
}
