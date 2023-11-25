<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'clients';

    protected $primaryKey = 'Client_ID';
}
