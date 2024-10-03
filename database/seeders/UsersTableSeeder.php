<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create a Faker instance
        $faker = Faker::create();

        $active = $faker->boolean;
        $phoneActive = $faker->boolean;

        DB::table('users')->insert([
            [
                'name' => $faker->name,
                'email' => 'admin@admin.admin',
                'phone' => $faker->unique()->phoneNumber,
                'phone_verified' => $phoneActive,
                'password' => Hash::make('password'), // Use Hash::make for hashing passwords
                'remember_token' => Str::random(10),
                'verify_token' => $active ? null : Str::uuid(),
                'phone_verify_token' => $phoneActive ? null : Str::uuid(),
                'phone_verify_token_expire' => $phoneActive ? null : Carbon::now()->addSeconds(300),
                'role' => $active ? $faker->randomElement([User::ROLE_USER, User::ROLE_ADMIN]) : User::ROLE_USER,
                'status' => $active ? User::STATUS_ACTIVE : User::STATUS_WAIT,
            ],
        ]);
    }
}
