<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Clase User
 *
 * @package App\Models
 * @author  Eduardo Agustin Cervantes Guerrero
 * @version 1.0
 * @since   2023-10-01 "Mientras no esta en GitHub"
 * El usuario debe extender el Autheticatable para que el metodo attempt() 
 * Funcione es decir que busque en la base de datos las credenciales
 */
class User extends Authenticatable
{
    use HasFactory;

    /**
     * El nombre de la tabla a la que esta asociado
     * este modelo.
     * 
     * @access protected
     * @var string
     */
    protected $table = 'users';

    /**
     * El nombre de la clave primaria de la tabla
     * a a la que esta asociada este modelo
     * 
     * @access protected
     * @var string
     */
    protected $primaryKey = 'pkUser';

    /**
     * Los atributos que se pueden asignar en 
     * el objeto de forma masiva
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastName',
        'fkRole',
        'email',
        'password',
        'passwordToken',
        'token'
        
    ];

    protected $hidden = [
        'password',
        'passwordToken',
        'token'
    ];

    public $timestamps = true;

   /**
   * Función para obtener el rol del usuario
   * Traido directamente desde la cedula
   * @return BelongsTo
   *
   * @version 1.0
   * @author Miguel Ángel Peña López <mangel.plopez@leon.tecnm.mx>
   */
  public function getRol(): BelongsTo
  {
    return $this->belongsTo(Rol::class, 'fkRol', 'pkRol');
  }

}
