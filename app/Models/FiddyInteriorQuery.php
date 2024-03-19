<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiddyInteriorQuery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'message',
        'type',
        'bedrooms',
        'bathrooms',
        'kitchens',
        'livings',
        'dinings',
        'total_estimate',
        'shared_estimate',
    ];
}
