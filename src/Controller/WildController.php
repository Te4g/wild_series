<?php
namespace App\Controller;

use App\Entity\Category;
use App\Entity\Program;
use App\Entity\Season;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use const http\Client\Curl\PROXY_HTTP;

/**
 * @Route("/wild", name="wild_")
 */
class WildController extends AbstractController
{
    /**
     * Show all rows from Program's entity
     *
     * @Route("", name="index")
     * @return Response A response instance
     */
    public function index() :Response
    {
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findAll();
        if (!$programs) {
            throw $this->createNotFoundException('No program found in program\'s table');
        }
        return $this->render('wild/index.html.twig',
            ['programs'=>$programs]);
    }

    /**
     * Getting a program with a formatted slug for title
     *
     * @param string $slug The slugger
     * @Route("/show/{slug<^[a-z0-9-]+$>}", defaults={"slug" = null}, name="show")
     * @return Response
     */
    public function show(?string $slug):Response
    {
        if (!$slug) {
            throw $this
                ->createNotFoundException('No slug has been sent to find a program in program\'s table.');
        }
        $slug = preg_replace(
            '/-/',
            ' ', ucwords(trim(strip_tags($slug)), "-")
        );
        $program = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findOneBy(['title' => mb_strtolower($slug)]);
        if (!$program) {
            throw $this->createNotFoundException(
                'No program with '.$slug.' title, found in program\'s table.'
            );
        }

        return $this->render('wild/show.html.twig', [
            'program' => $program,
            'slug'  => $slug,
        ]);
    }

    /**
     * @Route("/category/{categoryName}", name="category")
     * @param string $categoryName
     * @return Response
     */
    public function showByCategory(?string $categoryName) :Response
    {
        $categoryName = mb_strtolower(trim(strip_tags($categoryName)));
        $categoryRepository = $this->getDoctrine()->getRepository(Category::class)->findOneBy(['name'=>$categoryName]);

        $categoryId = $categoryRepository->getId();

        $programs = $this->getDoctrine()->getRepository(Program::class)
            ->findBy(['category' => $categoryId], ['id' => 'DESC'], 3, 0);
        return $this->render('wild/category.html.twig', [
            'programs' => $programs
        ]);
    }

    /**
     * @Route("/program/{slug}", name="program")
     * @param string|null $slug
     * @return Response
     */
    public function showByProgram(?string $slug):Response
    {
        $slug = str_replace("_", " ", $slug);
        $programs = $this->getDoctrine()->getRepository(Program::class)->findBy(['title'=>$slug]);
        var_dump($programs);
        return $this->render('wild/program.html.twig', ['programs'=>$programs]);
    }

    /**
     * @param int $id
     * @Route("/season/{id}", name="season")
     * @return Response
     */
    public function showBySeason(int $id):Response
    {
        $season = $this->getDoctrine()->getRepository(Season::class)->findOneBy(['id'=>$id]);
        $programs = $season->getProgram();
        $episodes = $season->getEpisodes();
        return $this->render('wild/season.html.twig',['season'=>$season, 'programs'=>$programs, 'episodes'=>$episodes]);
    }
}