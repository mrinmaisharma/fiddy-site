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
        'bedroom_lengths',
        'bedroom_breadths',
        'bathrooms',
        'bathroom_lengths',
        'bathroom_breadths',
        'kitchens',
        'kitchen_lengths',
        'kitchen_breadths',
        'livings',
        'living_lengths',
        'living_breadths',
        'dinings',
        'dining_lengths',
        'dining_breadths',
        'total_estimate',
        'shared_estimate',
    ];
}
