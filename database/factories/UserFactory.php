<?php

declare(strict_types=1);

namespace Lines\Auth\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Lines\Auth\Domain\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Lines\Auth\Domain\Models\User>
 */
class UserFactory extends Factory
{
    /*
    * @var class-string<\Illuminate\Database\Eloquent\Model>
    */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }
}
