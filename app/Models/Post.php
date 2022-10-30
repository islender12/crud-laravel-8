<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getGetTitleAttribute()
    {
       // return strtoupper($this->title);
       // Queremos que nos Imprima la primera letra en mayuscula
       return ucfirst($this->title);
    }

    public function setTitleAttribute($value){
        $this->attributes['title'] = strtolower($value);
    }
}
