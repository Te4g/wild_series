<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/wild", name="wild_")
 */
class WildController extends AbstractController
{
    /**
     * @Route("", name="index")
     */
    public function index() :Response
    {
        return $this->render('wild/index.html.twig',
            ['website'=>'Wild Series']);
    }

    /**
     * @Route("/show/{slug}", requirements={"slug"="[a-z0-9-]+"}, name="show")
     * @param $slug
     * @return Response
     */
    public function show(string $slug = "Aucune série sélectionnée, veuillez choisir une série") : Response
    {
        $slug = str_replace("-", " ", $slug);
        $slug = ucwords($slug);
        return $this->render('wild/show.html.twig', ['slug'=> $slug]);
    }
}