<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route(path="/", methods={"GET"})
     */
    public function index()
    {
        $articles = ['Article 1', 'Article 2'];

        return $this->render('articles/index.html.twig', [
            'articles' => $articles
        ]);
    }
}