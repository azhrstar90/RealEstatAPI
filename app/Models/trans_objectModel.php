<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_objectModel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'trnasaction_object';

    protected $primaryKey = 'Trans_ID';
}
