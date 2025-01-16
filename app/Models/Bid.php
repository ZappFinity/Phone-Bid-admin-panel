<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobile_id',
        'phone',
        'email',
        'bid_price'
    ];

    public function mobile()
    {
        return $this->belongsTo(Mobile::class);
    }

    
}