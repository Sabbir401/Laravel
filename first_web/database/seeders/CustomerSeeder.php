<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i < 40; $i++) {
            $customer = new Customer();
            $customer->name = $faker->name;
            $customer->email = $faker->email;
            $customer->gender = 'M';
            $customer->address = $faker->address;
            $customer->states = $faker->state;
            $customer->country = $faker->country;
            $customer->dob = $faker->date;
            $customer->password = $faker->password;
            $customer->save();
        }
    }
}
