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
    public function home(): Response
    {
        $users = [
            0 => 'Emilie',
            1 => 'Kevin',
            2 => 'Alexia',
            3 => 'Yael',
            4 => 'Laura',
        ];

        
        return $this->json($users, 200, ['Access-Control-Allow-Origin' =>'*']);
    }

    /**
     * @Route("/api-mail", name="api_mail"), methods="GET")
     */
    public function mail()
    {
        $email = [
            0 => 'emilie@emilie.com',
            1 => 'kevin@kevin.com',
            2 => 'alexia@alexia.com',
            3 => 'yael@yael.com',
            4 =>'laura@laura.com'
        ];

        return $this->json($email, 200, ['Access-Control-Allow-Origin' =>'*']);
    }

    /**
     * @Route("/api-roles", name="api_roles", methods="GET")
     */
    public function roles()
    {
        $roles = [
            0 => 'Scrum Master',
            1 => 'Product Owner',
            2 => 'Lead Dev Front',
            3 => 'Lead Dev Back',
            4 => 'Git Master',
        ];

    
        return $this->json($roles, 200, ['Access-Control-Allow-Origin' =>'*']);
    }
}
