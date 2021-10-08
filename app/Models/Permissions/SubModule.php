<?php

namespace App\Models\Permissions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubModule extends Model
{
    use HasFactory;

    public function parent_permissions ()
    {
        return $this->hasMany(ParentPermission::class, 'submodule_id');
    }
}
