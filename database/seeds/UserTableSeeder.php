<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Admin',
            'email' => 'admin@domain.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            // 'type' => 'Admin',
            // 'status' => 'Active',
            // 'country_id' => 237,
            // 'mobile_number' => '0123456789',
            // 'office_number' => '0123456789',
            // 'company_name' => 'XYZ',
            // 'address' => 'XYZ',
            // 'unique_id' => uniqid(time()),

        ]);
    }
}
