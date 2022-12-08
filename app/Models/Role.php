<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $hidden = ['created_at', 'updated_at',];

    public function user()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
