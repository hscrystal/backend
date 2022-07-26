<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'stockid',
        'borrow',
        'student_id',
        'item_id'
    ];

    public function students()
    {
        return $this->belongsTo('App\Models\Student','student_id');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item','item_id');
    }
}
