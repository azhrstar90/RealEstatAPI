<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RealEstateObject extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'realestateobjects';

    protected $primaryKey = 'object_ID';

     // Other model properties and methods

    /**
     * Scope a query to filter products by type and price range.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $filters
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilter($query, $filters)
    {
        if (isset($filters['type'])) {
            $query->where('object_type', $filters['type']);
        }

        if (isset($filters['min_price'])) {
            $query->where('object_price', '>=', $filters['min_price']);
        }

        if (isset($filters['max_price'])) {
            $query->where('object_price', '<=', $filters['max_price']);
        }

        return $query;
    }

}
