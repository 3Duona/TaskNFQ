<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleEditForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EditController extends AbstractController
{
    
    #[Route('/edit_article/{id}', name: 'article_edit')]
    public function edit(Article $article, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ArticleEditForm::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Article $article */
            $article = $form->getData();
            $article->setUpdatedAt(new \DateTime());
            $em->persist($article);
            $em->flush();
            $this->addFlash('success', 'Article Created!');
            
            return $this->redirectToRoute('article_view', ['id' => $article->getId()]);
        }

        return $this->render('pages/edit.html.twig', [
            'article' => $article,
            'articleForm' => $form->createView(),
        ]);
    }
}