<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $active = $this->faker->boolean;
        $phoneActive = $this->faker->boolean;

        return [
            'name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'phone_verified' => $phoneActive,
            'password' => bcrypt('password'), // Use bcrypt for hashing passwords
            'remember_token' => Str::random(10),
            'verify_token' => $active ? null : Str::uuid(),
            'phone_verify_token' => $phoneActive ? null : Str::uuid(),
            'phone_verify_token_expire' => $phoneActive ? null : Carbon::now()->addSeconds(300),
            'role' => $active ? $this->faker->randomElement([User::ROLE_USER, User::ROLE_ADMIN]) : User::ROLE_USER,
            'status' => $active ? User::STATUS_ACTIVE : User::STATUS_WAIT,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

}
