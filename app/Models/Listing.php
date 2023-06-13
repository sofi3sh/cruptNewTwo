<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'is_active',
        'exchange_id',
        'coin_id',
        'second_coin_id',
        'start_at',
        'created_at',
        'updated_at',
    ];

}
