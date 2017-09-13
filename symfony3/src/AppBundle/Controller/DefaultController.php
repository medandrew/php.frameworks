<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    protected $news = [];

    public function __construct()
    {
        $file = file(__DIR__ . '/../../news.php', FILE_IGNORE_NEW_LINES);
        foreach ($file as $record) {
            $this->news[] = explode('|', $record);
        }
    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        //if (isset($_SERVER['X-USERNAME']) && ($_SERVER['X-USERNAME'] === 'admin')) {
        //    if (isset($_SERVER['X-PASSWORD']) && ($_SERVER['X-PASSWORD'] === hash_hmac('ripemd160', '123456', 'strawberry'))) {
                return $this->render('default/news.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
                    'news' => $this->news,
                ]);
        //    }
        //}
        //header('HTTP/l.1 401 Unauthorized');
        //die();
    }

    /**
     * @Route("/news/{id}/show", name="article")
     */
    public function showAction(Request $request)
    {
        $id = (int)$request->get('id');
        return $this->render('default/article.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'news' => $this->news,
            'article'  => $this->news[--$id],
        ]);
    }
}
