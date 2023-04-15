<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function list(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();
        $readingTimes = [];
    
        foreach ($articles as $article) {
            $readingTime = $this->calculateReadingTime($article->getText());
            $readingTimes[$article->getId()] = $readingTime;
        }
    
        return $this->render('pages/index.html.twig', [
            'articles' => $articles,
            'readingTimes' => $readingTimes,
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