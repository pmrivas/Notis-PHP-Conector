<?php

namespace TresErres\NotisConector;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use TresErres\NotisConector\Entity\Notification;
use TresErres\NotisConector\Entity\GetLinks;

class NotisConector
{

    /** @var Client */
    private $client;

    /**
     * @param string $url
     * @param string $auth_token
     */
    public function __construct(
        string $url,
        string $auth_token
    )
    {
        $this->client = new Client([
            'base_uri' => $url,
            'headers' => [
                'authorization' => 'Bearer ' . $auth_token
            ]
        ]);
    }

    /**
     * Crea una notificación enviando una petición a Notis con la $notificacion especificada
     *
     * @throws GuzzleException
     */
    public function createNotification(Notification $notification)
    {
        $this->client->post('/notifications', [
            'json' => [
                'data' => $notification->toArray()
            ]
        ]);
    }

    /**
     * Trae notificaciones para el $link especificado
     *
     * @throws GuzzleException
     */
    public function getLinks(GetLinks $getLinks)
    {
        $this->client->get('/usersbylink?' . http_build_query($getLinks->toArray()));
    }

}
