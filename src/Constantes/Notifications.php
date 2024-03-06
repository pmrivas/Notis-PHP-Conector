<?php

namespace TresErres\NotisConector\Constantes;

final class Notifications
{
    public const NOTIFICATION_TYPE_PERSONAL_PEDIDO_REVISION = 'personal:pedido-revision';
    public const NOTIFICATION_TYPE_PERSONAL_REGISTRO_FIRMADO_ACTUALIZADO = 'personal:registro-firmado-actualizado';
    public const NOTIFICATION_TYPE_PERSONAL_PEDIDO_ENVIADO = 'personal:pedido-enviado';

    public const NOTIFICATION_TYPES = [
        self::NOTIFICATION_TYPE_PERSONAL_PEDIDO_REVISION,
        self::NOTIFICATION_TYPE_PERSONAL_REGISTRO_FIRMADO_ACTUALIZADO,
        self::NOTIFICATION_TYPE_PERSONAL_PEDIDO_ENVIADO
    ];

    public const NOTIFICATION_LEVEL_USER = 'user';
    public const NOTIFICATION_LEVELS = [
        self::NOTIFICATION_LEVEL_USER
    ];
}
