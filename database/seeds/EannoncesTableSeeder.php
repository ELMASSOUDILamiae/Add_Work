<?php

use App\eannonce;
use Illuminate\Database\Seeder;

class EannoncesTableSeeder extends Seeder
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
        $eannonce1 = eannonce::Create([
                'aw_title' => "titrea 1",
                'aw_core' => "contenue de l'anance 1, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'aw_img' => "link1.phg;link2.png;link3.png",
                'entreprise_id' => 1,

            ]);

        $eannonce2 = eannonce::Create([
                'aw_title' => "titrea 2",
                'aw_core' => "contenue de l'anance 2 test seeding e annances, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'aw_img' => "link1.phg;link2.png;link3.png",
                'entreprise_id' => 1,

            ]);

        $eannonce3 = eannonce::Create([
                'aw_title' => "titrea 3",
                'aw_core' => "contenue de l'anance 3 hello world, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                'aw_img' => "link1.phg;link2.png;link3.png",
                'entreprise_id' => 1,

            ]);
    }
}
