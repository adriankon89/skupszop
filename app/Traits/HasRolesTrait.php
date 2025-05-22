<?php

namespace App\Traits;

use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasRolesTrait
{
    public function roles() : BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }

    public function hasRole(...$roles)
    {
        return false;
    }
}
