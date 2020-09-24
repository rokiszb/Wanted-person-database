<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/wanted-persons", name="api")
     */
    public function index()
    {
        return new JsonResponse(['person' => 'is ithis  the one']);
    }
}
