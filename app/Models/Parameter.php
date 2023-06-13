<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $guarded = [];
    protected $table = 'parameters';
    protected $fillable = [
        'id',
        'is_active',
        'exchange_id',
        'api_key',
        'secret_key',
        'secret_pass',
        'max_trade',
        'position_amount',
        'stop_loss',
        'take_profit',
        'finish_time',
        'slip',
        'after_finish_time',
        'created_at',
        'updated_at',
    ];

}

