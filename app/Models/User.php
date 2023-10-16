<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = ['username', 'password'];

    public $timestamps = false;

}
