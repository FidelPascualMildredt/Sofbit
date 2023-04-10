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
    protected $guarded= [];
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $appends =[
        'role'
    ];

    public $dates = [
        'birthdate'
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


    public function getRoleAttribute(){
        $rol = $this->rol;
        if ($rol->Administrator ) {
            return 'Administrador';
        }
        if ($rol->Medico ) {
            return 'Medico';
        }
        if ($rol->Paciente ) {
            return 'Paciente';
        }
    }

    // public function rol()
    // {
    //     return $this->hasOne(Rol::class,'id','role_id');
    // }
    public function rol()
    {
        return $this->belongsTo(Rol::class,'role_id', 'id');
    }

    public function consult()
    {
        return $this->hasOne(Consult::class,'consults_id', 'id');
    }



}
