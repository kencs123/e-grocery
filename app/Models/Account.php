<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory;
    //protected $table = 'accounts';
    protected $guarded = ['id'];


    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'roles_id');
    }
}
