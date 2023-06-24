<?php

use Database\Seeders\AssessmentReportProductSeeder;
use Database\Seeders\DemageSectionSeeder;
use Database\Seeders\SuppSeeder;
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
        // $this->call(\Database\Seeders\CompanyDetailTableSeeder::class);
        // $this->call(\Database\Seeders\BoardOfDirectorTableSeeder::class);
        // $this->call(\Database\Seeders\CompanyAccountingTableSeeder::class);
        // $this->call(\Database\Seeders\MarketShareTableSeeder::class);
        // $this->call(\Database\Seeders\ShareholderTableSeeder::class);
        // $this->call(\Database\Seeders\CountriesTableSeeder::class);
        // $this->call(\Database\Seeders\CountryInformationTableSeeder::class);
        // $this->call(PackageTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AssessmentReportProductSeeder::class);
        $this->call(DemageSectionSeeder::class);
        $this->call(SuppSeeder::class);
    }
}
