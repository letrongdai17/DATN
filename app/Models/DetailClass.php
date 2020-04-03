<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailClass extends Model
{
    protected $fillable = ['class_id', 'start_time', 'end_time'];

    public function students()
    {
        return $this->belongsToMany('App\Models\Student', 'detail_class_student');
    }

    public function class()
    {
        return $this->belongsTo('App\Models\Class');
    }
}
