<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\Transactions; 
use Carbon\Carbon;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 300; $i++) {
            $transactionId = DB::table('transactions')->insertGetId([
                'Transaction_ID' => rand(10000, 999999),
                'Transaction_status' => rand(0, 1) ? 'completed' : 'rejected',
                'Transaction_date' => now(),
                'AdminID' => 1 ,
                'Transaction_Created' => now(),
                'Transaction_Updated' => now(),
            ]);

            // Fetch a random Real Estate Object's ID
            $realEstateObject = DB::table('realestateobjects')->inRandomOrder()->first();
            $realEstateObjectId = $realEstateObject ? $realEstateObject->object_ID : null;

            // Fetch a random Client's ID
            $client = DB::table('clients')->inRandomOrder()->first();
            $clientId = $client ? $client->Client_ID : null;

            // Check if IDs are available before linking
            if ($realEstateObjectId && $clientId) {
                // Linking transaction to a real estate object
                DB::table('trnasaction_object')->insert([
                    'Trans_ID'   => $transactionId,
                    'Object_ID'  => $realEstateObjectId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                
                // Linking transaction to a client
                DB::table('clienttransaction')->insert([
                    'client_id'      => $clientId,
                    'transaction_id' => $transactionId,
                    'created_at'     => Carbon::now(),
                    'updated_at'     => Carbon::now(),
                ]);            
            } else {
                // Handle cases where no real estate object or client is found
                Log::warning('TransactionSeeder: No real estate object or client found to link.');
            }            
        }
    }
}
