<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = ['name', 'subject'];

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_class');
    }

    public function detailClasses()
    {
        return $this->hasMany('App\Models\DetailClass');
    }
}
