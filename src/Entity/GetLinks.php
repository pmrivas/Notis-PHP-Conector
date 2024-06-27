<?php

namespace TresErres\NotisConector\Entity;

use TresErres\NotisConector\Error\NoTextException;

class GetLinks
{
    /** @var string */
    private $link;

    /** @var integer|null */
    private $take;

    /** @var integer|null */
    private $skip;

    /**
     * @param string $link
     * @param integer|null $take
     * @param integer|null $skip
     *
     * @throws NoTextException
     */
    public function __construct(
        $link,
        $take=null,
        $skip=null
    )
    {
        if (is_null($link) && is_null($link)) {
            throw new NoTextException();
        }

        $this->link = $link;
        $this->take = $take;
        $this->skip = $skip;
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
            'take' => $this->take,
            'skip' => $this->skip
        ];
    }
}