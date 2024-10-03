<?php


namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{


    public function run():void
    {
        $this->call([
            UsersTableSeeder::class,
            // add other seeders here
        ]);
    }
}
