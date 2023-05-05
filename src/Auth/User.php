<?php

namespace JustBetter\StatamicEnvironmentPermissions\Auth;

use Statamic\Auth\Eloquent\User as BaseUser;

class User extends BaseUser
{
    public function hasPermission($permission)
    {
        if (in_array($permission, config('environment-permissions.permissions'))) {
            return false;
        }

        return $this->get('super') ? true : parent::hasPermission($permission);
    }

    public function isSuper()
    {
        if (config('environment-permissions.super')) {
            return false;
        }

        return parent::isSuper();
    }
}
