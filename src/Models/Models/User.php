<?php

namespace Mralston\LaravelPasswordlessLogin\Models\Models;

use Mralston\LaravelPasswordlessLogin\Traits\PasswordlessLogin;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use PasswordlessLogin;
    protected $table = "users";
    protected $fillable = ["name", "email", "password", "phone"];
}
