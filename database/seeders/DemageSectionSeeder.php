<?php

namespace Database\Seeders;

use App\Models\DemageSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DemageSection::create([
            'name'          => 'Front Bumper Bar',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        DemageSection::create([
            'name'          => 'Left Front Guard',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        DemageSection::create([
            'name'          => 'Left Front Door',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
