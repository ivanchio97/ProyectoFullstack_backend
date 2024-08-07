<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    public function userRol(){
        return $this->hasMany(Roles::class, 'id');
    }

    public function getFullNameAttribute(){
        return $this->name.' '.$this->lastname;
    }

}
