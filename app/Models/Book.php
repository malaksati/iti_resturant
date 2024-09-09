<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'total',
        'date',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
