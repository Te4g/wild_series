<?php

namespace App\Controller;

use App\Entity\Actor;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class ActorController
 * @package App\Controller
 * @Route("/actor", name="actor")
 */
class ActorController2 extends AbstractController
{
    /**
     * @Route("/{name}", name="_name")
     * @param string|null $name
     * @return Response
     */
    public function showByName(?string $name): Response
    {

        if (!$name) {
            throw $this
                ->createNotFoundException('No name has been sent to find a program in program\'s table.');
        }
        $name = str_replace('_', ' ', ucwords(trim(strip_tags($name))));
        $actor = $this->getDoctrine()
            ->getRepository(Actor::class)
            ->findOneBy(['name' => mb_strtolower($name)]);
        if (!$name) {
            throw $this->createNotFoundException(
                'No actor with '.$name.' name, found in actor\'s table.'
            );
        }
        return $this->render('actor/index.html.twig', [
            'actor' => $actor,
            'name' => $name
        ]);
    }


}