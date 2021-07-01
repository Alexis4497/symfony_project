<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{
    /**
     * @var Environment
     */

    private $twig;
    public function __construct(Environment $twig)
    {
        $this ->twig = $twig;
    }
    

    public function index(): Response{

        return new Response($this->twig->render('pages/home.html.twig'));
    }

    public function about(): Response{

        return new Response($this->twig->render('pages/about.html.twig'));
    }

    public function skills(): Response{

        return new Response($this->twig->render('pages/skills.html.twig'));
    }

    public function projects(): Response{

        return new Response($this->twig->render('pages/projects.html.twig'));
    }
    public function cv(): Response{

        return new Response($this->twig->render('pages/cv.html.twig'));
    }
    public function contact(): Response{

        return new Response($this->twig->render('pages/contact.html.twig'));
    }

}