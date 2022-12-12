<?php

namespace TresErres\NotisConector\Constantes;

final class Notifications
{
    public const NOTIFICATION_TYPE_PERSONAL_PEDIDO_REVISION = 'personal:registro-firmado-actualizado';
    public const NOTIFICATION_TYPE_PERSONAL_REGISTRO_FIRMADO_ACTUALIZADO = 'personal:pedido-revision';

    public const NOTIFICATION_TYPES = [
        self::NOTIFICATION_TYPE_PERSONAL_PEDIDO_REVISION,
        self::NOTIFICATION_TYPE_PERSONAL_REGISTRO_FIRMADO_ACTUALIZADO
    ];
}