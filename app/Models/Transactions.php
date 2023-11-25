<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'transactions';

    protected $primaryKey = 'Transaction_ID';
}
