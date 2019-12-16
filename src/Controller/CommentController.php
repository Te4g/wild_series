<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\Comment1Type;
use App\Repository\CommentRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/comment")
 * @IsGranted("ROLE_USER")
 */
class CommentController extends AbstractController
{
    /**
     * @Route("/", name="comment_index", methods={"GET"})
     */
    public function index(CommentRepository $commentRepository): Response
    {
        $user= $this->getUser();
        if ($user != null) {
            $user = $user->getId();
        }
        return $this->render('comment/index.html.twig', [
            'comments' => $commentRepository->findAll(),
            'user' => $user
        ]);
    }


    /**
     * @Route("/{id}", name="comment_show", methods={"GET"})
     */
    public function show(Comment $comment): Response
    {
        return $this->render('comment/show.html.twig', [
            'comment' => $comment,
        ]);
    }

/*    /**
     * @Route("/{id}/edit", name="comment_edit", methods={"GET","POST"})
     */
/*    public function edit(Request $request, Comment $comment): Response
    {
        $form = $this->createForm(Comment1Type::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('comment_index');
        }

        return $this->render('comment/edit.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }*/

    /**
     * @Route("/{id}", name="comment_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Comment $comment): Response
    {
        $flash = '';

        if ($this->isCsrfTokenValid('delete'.$comment->getId(), $request->request->get('_token'))) {
            if ( $this->getUser()->getId() === $comment->getUser()->getId()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($comment);
                $entityManager->flush();
            } else {
                $flash = $this->addFlash("error", "Vous ne pouvez pas supprimer un comment qui n'est pas le vôtre");

            }

        }

        return $this->redirectToRoute('comment_index', ['flash'=>$flash]);
    }
}
