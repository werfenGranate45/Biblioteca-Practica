<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Clase Rol
 * 
 * @package App\Models
 * @author  Eduardo Agustin Cervantes Guerrero
 * @version 1.0
 * @since   2023-10-01 "Mientras no esta en GitHub"
 */
class Rol extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'pkRole';
    
    protected $fillable = [
        'name', 
        'abbr', 
        'token'
    ];

    protected $hidden = ['token'];

    public $timestamps = true;
}
