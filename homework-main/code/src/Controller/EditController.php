<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditController extends AbstractController
{
    
    #[Route('/edit_article/{id}', name: 'article_edit')]
    public function edit(Article $article): Response
    {

        $form = $this->createForm(ArticleEditForm::class, $article);

        return $this->render('pages/edit.html.twig', [
            'article' => $article,
            'articleForm' => $form->createView(),
        ]);
    }
}