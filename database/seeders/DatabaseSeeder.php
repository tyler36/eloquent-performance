<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\Customer;
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
        $dl = User::factory()->create(['name' => 'Dave Lister', 'is_owner' => true]);

        Customer::factory()
            ->count(100)
            ->create();

        Customer::whereIn('id', [2, 12, 34, 35, 75, 60, 29, 83, 98, 99])->update(['sales_rep_id' => $dl->id ]);
    }
}
