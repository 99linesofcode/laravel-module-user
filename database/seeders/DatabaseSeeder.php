<?php

namespace Lines\Auth\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Lines\Auth\Domain\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => '',
        //     'email' => '',
        //     'password' => Hash::make(''),
        // ]);
    }
}
