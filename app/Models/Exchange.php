<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;
    protected $table = 'exchanges';
    protected $fillable = [
        'id',
        'name',
        'is_on',
        'users_id',
        'api_key',
        'secret_key',
        'secret_pass',
    ];

    public function param(){
        // підтягнути значення параметрів
    }

}
