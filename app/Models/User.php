<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    // Nos Imprimira los datos como le indiquemos ya sea mayuscula minuscula primera letra en Mayuscula
    // En medio de getAttribute debe ir el nombre del campo que queremos imprimir
    // getGetNameAttribute()
    public function getGetNameAttribute()
    {
        // el Nombre del Campo
        // no lo estamos alterando solo lo imprimimos en mayuscula
        return strtoupper($this->name);
    }

    // En el caso de como queremos almacenar los datos
    // Tenemos el SetAttribute que nos permite indicar
    // que almacene en la bd solo en minuscula

    // en medio solo colocamos el nombre del campo
    // ejemplo setNameAttribute

    // Cuando se trate del campo name este sufre una transformacion
    // para convertirse en minuscula y almacena el nombre en minuscula
    public function setNameAttribute($value)
    {
         $this->attributes['name'] = strtolower($value);
    }
}
