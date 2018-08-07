<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'type_document_emp', 'nro_document_emp', 'name_emp','tlf_local_emp', 'tlf_movil_emp','fecha_contrato_ini','fecha_contrato_final', 'email', 'password',
    ];

    public function category()
    {
        return $this->hasMany(CategoryProduct::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
