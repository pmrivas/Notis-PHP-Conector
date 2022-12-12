<?php

namespace TresErres\NotisConector\Entity;

use TresErres\NotisConector\Constantes\Notifications;
use TresErres\NotisConector\Error\InvalidTypeException;
use TresErres\NotisConector\Error\NoTextException;

class Notification
{
    /** @var string */
    private $type;

    /** @var string */
    private $user_id
    ;
    /** @var string|null */
    private $title;

    /** @var string|null */
    private $description;

    /** @var string */
    private $link;

    /**
     * @param string $type
     * @param string $user_id
     * @param string|null $title
     * @param string|null $description
     * @param string|null $link
     *
     * @throws InvalidTypeException
     * @throws NoTextException
     */
    public function __construct(
        string $type,
        string $user_id,
        ?string $title = null,
        ?string $description = null,
        ?string $link = null
    )
    {
        if (!in_array($type, Notifications::NOTIFICATION_TYPES)) {
            throw new InvalidTypeException();
        }

        if (is_null($title) && is_null($description)) {
            throw new NoTextException();
        }

        $this->type = $type;
        $this->user_id = $user_id;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
    }

    /**
     * Retorna un arreglo formateando los datos de la entidad
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'userId' => $this->user_id,
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link
        ];
    }
}