<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('admin')->insert([
            [
                'nip' => '789465132654',
                'nama' => 'iqbra',
                'email' => 'iqbra@gmail.com',
                'password' => Hash::make('1'),
                'no_hp' => '6546166351'
            ]
        ]);
    }
}
