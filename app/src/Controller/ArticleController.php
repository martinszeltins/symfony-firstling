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
        return $this->render('articles/index.html.twig');
    }
}