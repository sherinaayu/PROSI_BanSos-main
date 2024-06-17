<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';

    protected $fillable = [
        'Name',
        'Email',
        'Username',
        'Password',
        'role',
    ];

    protected $hidden = [
        'Password',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->Password;
    }
}