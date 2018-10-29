<?php

namespace App;

use App\Model;

use Illuminate\Auth\Authenticatable;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password'
    ];
    use Authenticatable;
}
