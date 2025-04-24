<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Student::factory()->count(5)->create();
        Grade::factory()->count(15)->create();

        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => 'some-remember-token',
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => 'another-remember-token',
            ],
            // Add more users here...
        ];

        foreach ($users as $user) {
            User::create($user); // Use create instead of updateOrCreate
        }
    }
}
