<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\clients;



class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 500; $i++) {
        DB::table('clients')->insert([
            'Client_ID' => rand(10000,999999),
            'Client_name' => Str::random(10),
            'Client_type' => rand(0, 1) ? 'Individual' : 'LegalEntity',
            'Client_contactDetails' => Str::random(10) . '@example.com',
            'AdminID' => 1 ,
            'Client_Created' => now(),
            'Client_Updated' => now(),
        ]);
    }
    }
}

