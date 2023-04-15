<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/article/{id}', name: 'article_view')]
    public function view(Article $article): Response
    {
        $Time = $this->calculateReadingTime($article->getText());

        return $this->render('pages/view.html.twig', [
            'article' => $article,
            'readingTime' => $Time,
        ]);
    }

    function calculateReadingTime(string $text): int
    {
        $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

        $longWords = array_filter($words, function($word) {
            return strlen($word) > 3;
        });

        $numWords = count($longWords);
        $numMinutes = ceil($numWords / 200);

        return $numMinutes;
    }
}