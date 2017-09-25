<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Author;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $news = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('default/news.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'news' => $news,
        ]);
    }

    /**
     * @Route("/news/{id}/show", name="article")
     */
    public function showAction(Request $request)
    {
        $id = (int)$request->get('id');
        $news = $this->getDoctrine()->getRepository(Article::class)->findAll();
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        $authors = $this->getDoctrine()->getRepository(Author::class)->findAll();

        return $this->render('default/article.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'news'     => $news,
            'article'  => $article,
            'authors'  => $authors,
        ]);
    }
}
