<?php

namespace TresErres\NotisConector\Error;

use Exception;

class NoTextException extends Exception
{
    /**
     * @param string $mensaje
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($mensaje = 'La notificación debe tener al menos título o descripción', $code = 0, Exception $previous = null)
    {
        parent::__construct($mensaje, $code, $previous);
    }
}