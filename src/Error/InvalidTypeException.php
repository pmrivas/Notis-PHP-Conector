<?php

namespace TresErres\NotisConector\Error;

use Exception;

class InvalidTypeException extends Exception
{
    /**
     * @param string $mensaje
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($mensaje = 'Tipo de notificación inválido', $code = 0, Exception $previous = null)
    {
        parent::__construct($mensaje, $code, $previous);
    }
}