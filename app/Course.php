<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['name', 'code', 'fee', 'duration'];

    public function taken()
    {
        return $this->hasMany(Student::class);
    }

}
