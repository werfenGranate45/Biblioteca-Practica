<?php

namespace app\Utils;

use Illuminate\Support\Facades\Session;


/**
 * class MessageUtils
 * Esta clase tendra constantes de mensages personalizados y metodos
 * que nos ayudara para mostrarlas en el blade por parte del servidor
 * 
 * @author Eduardo Agustin Cervantes Guerrero
 * @version 1.0 19/16/2025
 */
class MessageUtils{
    /**
     * Mensaje constantes para la vista de login
     * 
     * Estas constantes funcionaran como un match para determinar que mensaje se mostrara
     * 
     * El chiste es que se realice con el tipo de mensaje y el mensaje
     * dentro de HTML que solo exista un solo <p></p> adento del div que valide que mensaje saldra
     */
    const MSG_ERROR_LOG = 1;
    const MSG_ALERT_LOG = 2;

    public static function whatMessage(string $message)
    {   
        return $message == self::MSG_ALERT_LOG;
    }
}

?>