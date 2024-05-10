<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionModel extends Model
{
    use HasFactory;

    protected $table = 'auction';
    protected $guarded = [];

    protected $casts = [
        'start_date' => 'date:Y/m/d',
    ];
}
