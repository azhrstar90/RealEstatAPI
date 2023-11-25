<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateObject extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'realestateobjects';

    protected $primaryKey = 'object_ID';

}
