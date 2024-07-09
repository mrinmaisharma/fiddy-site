<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'need_help_with', 'message'];

    public function scopeSearch($query, $value = "")
    {
        return $query->where('name', 'LIKE', "%$value%")
            ->orWhere('email', 'LIKE', "%$value%")
            ->orWhere('phone', 'LIKE', "%$value%")
            ->orWhere('need_help_with', 'LIKE', "%$value%");
    }
}
