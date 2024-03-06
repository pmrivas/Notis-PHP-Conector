<?php

namespace TresErres\NotisConector\Entity;

use TresErres\NotisConector\Constantes\Notifications;
use TresErres\NotisConector\Error\InvalidLevelException;
use TresErres\NotisConector\Error\InvalidRecipientsException;
use TresErres\NotisConector\Error\InvalidTypeException;
use TresErres\NotisConector\Error\NoTextException;

class Notification
{
    /** @var string */
    private $level;

    /** @var string[] */
    private $recipients;

    /** @var string */
    private $type;

    /** @var string|null */
    private $title;

    /** @var string|null */
    private $description;

    /** @var string */
    private $link;

    /** @var string */
    private $who;

    /**
     * @param string $level
     * @param string $type
     * @param string[] $recipients
     * @param string|null $title
     * @param string|null $description
     * @param string|null $link
     * @param string|null $who
     *
     * @throws InvalidLevelException
     * @throws InvalidTypeException
     * @throws NoTextException
     * @throws InvalidRecipientsException
     */
    public function __construct(
        $level,
        $type,
        $recipients,
        $title = null,
        $description = null,
        $link = null,
        $who = null
    )
    {
        if (!in_array($level, Notifications::NOTIFICATION_LEVELS)) {
            throw new InvalidLevelException();
        }

        if (!in_array($type, Notifications::NOTIFICATION_TYPES)) {
            throw new InvalidTypeException();
        }

        if (is_null($title) && is_null($description)) {
            throw new NoTextException();
        }

        if (
            empty($recipients) || !is_array($recipients)
            || array_sum(array_map('is_string', $recipients)) !== count($recipients)
        ) {
            throw new InvalidRecipientsException();
        }

        $this->level = $level;
        $this->type = $type;
        $this->recipients = $recipients;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->who = $who;
    }

    /**
     * Retorna un arreglo formateando los datos de la entidad
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'level' => $this->level,
            'recipients' => $this->recipients,
            'type' => $this->type,
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link,
            'who' => $this->who
        ];
    }
}