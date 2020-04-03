<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'student_code'];

    public function detailClasses()
    {
        return $this->belongsToMany('App\Models\DetailClasses', 'detail_class_student');
    }
}
