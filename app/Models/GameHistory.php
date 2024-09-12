<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameHistory extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'random_number',
        'result',
        'win_amount'
    ];
}
