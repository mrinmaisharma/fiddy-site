<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiddyKitchenQuery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'message',
        'shape',
        'finish_type',
        'a_length',
        'a_breadth',
        'a_height',
        'b_length',
        'b_breadth',
        'b_height',
        'c_length',
        'c_breadth',
        'c_height',
        'total_estimate',
        'shared_estimate',
    ];
}
