<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    protected $fillable = ['name'];

    //Relación con usuarios

    public function users()
    {
        return $this->hasMany(User::class,'id_user');
    }
}
