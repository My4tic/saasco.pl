<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@saasco.pl',
            'password' => Hash::make('&RtL4*wv!KUBYEbx'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        $this->command->info('Admin user created successfully!');
        $this->command->info('Email: admin@saasco.pl');
        $this->command->info('Password: &RtL4*wv!KUBYEbx');
        $this->command->warn('Please change this password after first login!');
    }
}
