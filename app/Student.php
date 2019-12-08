<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'username', 'password'];

    public function taking()
    {
        return $this->belongsToMany(Course::class);
    }
}
