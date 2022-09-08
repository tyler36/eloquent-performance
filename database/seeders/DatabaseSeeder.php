<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()
            ->count(1000)
            ->hasUsers(10)
            ->create();

        $ms = Company::factory()->create(['name' => 'Microsoft Corporation']);
        User::factory()->create(['first_name' => 'Bill', 'last_name' => 'Gates', 'company_id' => $ms->id]);
    }
}
