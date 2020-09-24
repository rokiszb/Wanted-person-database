<?php

namespace App\Controller;

use App\Repository\WantedPersonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/wanted-persons", name="api", methods={"POST"})
     */
    public function query(Request $request, WantedPersonRepository $wantedPersonRepository)
    {
        $response = [];

        $data = json_decode($request->getContent(), true);
        if (!empty($data['fullName'])) {
            $wantedPersonObjects = $wantedPersonRepository->findBy(
                ['fullName' => $data['fullName']]
            );

            foreach ($wantedPersonObjects as $object) {
                $response[] = [
                    'id' => $object->getId(),
                    'fullName' => $object->getFullName(),
                    'comment' => $object->getComment(),
                    'externalId' => $object->getExternalId(),
                    'fullInformation' => $object->getFullInformation(),
                    'source' => $object->getSource(),
                    'createdAt' => $object->getCreatedAt(),
                ];
            }
        }

        return new JsonResponse($response);
    }
}
