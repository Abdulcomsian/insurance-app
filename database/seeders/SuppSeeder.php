<?php

namespace Database\Seeders;

use App\Models\Supp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supp::create([
            'name'          => 'Supp 1',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Supp::create([
            'name'          => 'Supp 2',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Supp::create([
            'name'          => 'Supp 3',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
