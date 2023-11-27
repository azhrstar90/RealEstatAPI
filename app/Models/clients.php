<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Transactions;

class clients extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'clients';

    protected $primaryKey = 'Client_ID';

    // DATABASE RELATIONSHIP BETWEEN CLIENTS AND TRNASACTION
    public function transactions()
    {
        return $this->belongsToMany(Transactions::class, 'clienttransaction', 'client_id', 'transaction_id');
    }
        
}
