<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    /**
     * Get the users of the user role.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
