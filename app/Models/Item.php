<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'itemid',
        'itemname',
        'remain'
    ];

    public function stocks()
    {
        return $this->belongsTo('App\Models\Stock','stock_id');
    }
}
