<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Transactions;

class Client_TransModel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'clienttransaction';

    protected $primaryKey = 'client_id';

}
