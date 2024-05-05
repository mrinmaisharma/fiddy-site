<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiddyWardrobeQuery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'message',
        'finish_type',
        'material',
        'wardrobe_type',
        'length',
        'width',
        'height',
        'total_estimate',
        'shared_estimate',
    ];
}
