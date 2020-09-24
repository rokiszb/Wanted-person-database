<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/wanted-persons", name="api", methods={"POST"})
     */
    public function query(Request $request)
    {
        // TODO: initiate repo, grab users by the fullName, return

        return new JsonResponse(['queryReturn' => [
            'person1' => 'Jeff',
            'person2' => 'Bill',
        ]]);
    }
}
