<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\RealEstateObject; 


class RealEstateObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating sample real estate objects
        for ($i = 0; $i < 500; $i++) {
        $types = ['apartment','home','supermarkit'];
        DB::table('realestateobjects')->insert([
            'object_ID' => rand(10000, 999999), // Random bigint
            'object_name' => Str::random(10),   // Random string for object name
            'object_price' => rand(1, 1000),    // Random price
            'object_type' => $types[rand(0, 2)],   // Random string for object type
            'AdminID' => 1 ,
            'object_created' => now(),          // Current timestamp
            'object_updated' => now(),          // Current timestamp
        ]);        // Add more objects as needed
    }
        
    }

}

