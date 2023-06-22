<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
              'name' => 'Silver',
              'description' => 'None',
              'price' => '100',
              'sanctions' => '10',
              'start_date' => now(),
              'end_date' => Carbon::now()->addYear(),
                'status' => \App\Utils\Status::Active
            ],
            [
              'name' => 'Gold',
              'description' => 'None',
              'price' => '200',
              'sanctions' => '20',
                'start_date' => now(),
                'end_date' => Carbon::now()->addYear(),
                'status' => \App\Utils\Status::Active
            ],
            [
              'name' => 'Platinum',
              'description' => 'none',
              'price' => '300',
              'sanctions' => '30',
                'start_date' => now(),
                'end_date' => Carbon::now()->addYear(),
                'status' => \App\Utils\Status::Active
            ],
        ];

        foreach($items as $item){
            Package::create($item);
        }
    }
}
