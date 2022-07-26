<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentid',
        'username',
        'lastname',
        'roomnumber',
    ];

    public function stocks()
    {
        return $this->hasMany(Student::class)->orderBy('id', 'desc');
    }
}
