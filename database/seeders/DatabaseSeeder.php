<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call([
           
            ClientSeeder::class,
            UserSeeder::class,
            ProviderSeeder::class,
            ProductSeeder::class,
            ContactSeeder::class,
            OrderSeeder::class,
        ]);
    }
}