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
    public function index(Request $request)
    {
        $token = $request->headers->get('X-API-KEY');
        if (empty($token)) {
            return new JsonResponse(null, 403);
        }
            // $a = 'b'; $request->headers->get('X-API-KEY');
        return new JsonResponse(['person' => 'is ithis  the one']);
    }
}
