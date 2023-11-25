<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_TransModel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'clienttransaction';

    protected $primaryKey = 'client_id';
}
