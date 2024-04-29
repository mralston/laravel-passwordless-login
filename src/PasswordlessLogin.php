<?php

namespace Mralston\LaravelPasswordlessLogin;

use Illuminate\Contracts\Auth\Authenticatable as User;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Mralston\LaravelPasswordlessLogin\PasswordlessLoginManager forUser(User $user)
 * @method static string generate()
 */
class PasswordlessLogin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "passwordless-login";
    }
}
