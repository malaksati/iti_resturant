<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'image'
    ];
    public function books(){
        return $this->hasMany(Book::class);
    }
    public function getChangeDateAttribute() {
        return $this->created_at->format('m/d/Y'); // H:i:s
    }
}
