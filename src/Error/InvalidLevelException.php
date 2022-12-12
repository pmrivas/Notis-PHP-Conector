<?php

namespace TresErres\NotisConector\Error;

use Exception;

class InvalidLevelException extends Exception
{
    /**
     * @param string $mensaje
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($mensaje = 'Nivel de notificación inválido', $code = 0, Exception $previous = null)
    {
        parent::__construct($mensaje, $code, $previous);
    }
}