<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'erho.dev (me)',
            'email' => 'me@erho.dev',
            'password' => bcrypt('E4i@wbSve7k$#Nk1Vc'),
        ]);

        // \App\Models\User::factory()->count(10)->create();
    }
}
