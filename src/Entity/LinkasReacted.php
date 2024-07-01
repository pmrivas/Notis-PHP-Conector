<?php

namespace TresErres\NotisConector\Entity;

use TresErres\NotisConector\Error\NoTextException;

class LinkasReacted
{
    /** @var string */
    private $link;
    private $userMe;


    /**
     * @param string $link
     *
     * @throws NoTextException
     */
    public function __construct(
        $link,
        $userMe
    )
    {
        if (is_null($link) && is_null($link)) {
            throw new NoTextException();
        }

        $this->link = $link;
        $this->userMe = $userMe;
    }

    /**
     * Retorna un arreglo formateando los datos de la entidad
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'link' => $this->link,
            'userMe' => $this->userMe
        ];
    }
}