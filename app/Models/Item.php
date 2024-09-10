<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Item extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'title',
        'date',
        'license',
        'price',
        'image',
        'tag_id'
    ];
    protected $appends = ['tag_name','tag_id'];
    public function tag()
    {
        return $this->belongsTo(Tag::class,'tag_id');
    }
    public function getTagNameAttribute()
    {
        return $this->tag->name;
    }
    public function getTagLowerAttribute()
    {
        return strtolower($this->tag->name);
    }
}
