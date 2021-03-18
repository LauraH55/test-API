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
            'Emilie'=> 'emilie@emilie.com',
            'Kevin' => 'kevin@kevin.com',
            'Alexia' => 'alexia@alexia.com',
            'Yael' => 'yael@yael.com',
            'Laura' => 'laura@laura.com'
        ];

    

        return $this->json($users, 200, ['Access-Control-Allow-Origin' =>'*']);
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

    
        return $this->json($roles);
    }
}
