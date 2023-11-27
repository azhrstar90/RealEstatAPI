<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use App\Models\clients;
use App\Models\RealEstateObject;





class Transactions extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'transactions';

    protected $primaryKey = 'Transaction_ID';

    public function transwithObjects()
    {
        return $this->belongsToMany( RealEstateObject::class,'trnasaction_object','Trans_ID','Object_ID');
    }

    // Relationship with clients
    public function transwithclients()
    {
        return $this->belongsToMany( clients::class,'clienttransaction','transaction_id','client_id');
    }
}
 