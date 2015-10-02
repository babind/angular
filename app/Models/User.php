<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $table='users';
  protected $fillable = [''];

   public function profiles()
    {
        return $this->hasMany('App\Models\Profile','user_id');
    }
...
}
