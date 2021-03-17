<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/", name="api_home", methods="GET")
     */
    public function home(Response $response): Response
    {
        $users = [
            'Emilie'=> 'emilie@emilie.com',
            'Kevin' => 'kevin@kevin.com',
            'Alexia' => 'alexia@alexia.com',
            'Yael' => 'yael@yael.com',
            'Laura' => 'laura@laura.com'
        ];

        $response->headers->set('Access-Control-Allow-Origin', 'http:localhost:8080', 'POST, GET, OPTIONS');

        return $this->json($users);
    }

    /**
     * @Route("/api-roles", name="api_roles", methods="GET")
     */
    public function roles(Response $response)
    {
        $roles = [
            0 => 'Scrum Master',
            1 => 'Product Owner',
            2 => 'Lead Dev Front',
            3 => 'Lead Dev Back',
            4 => 'Git Master',
        ];

        $response->headers->set('Access-Control-Allow-Origin', 'http:localhost:8080', 'POST, GET, OPTIONS');

        return $this->json($roles);
    }
}
