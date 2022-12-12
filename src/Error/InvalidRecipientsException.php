<?php

namespace TresErres\NotisConector\Error;

use Exception;

class InvalidRecipientsException extends Exception
{
    /**
     * @param string $mensaje
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($mensaje = 'Destinatarios de notificación inválidos', $code = 0, Exception $previous = null)
    {
        parent::__construct($mensaje, $code, $previous);
    }
}