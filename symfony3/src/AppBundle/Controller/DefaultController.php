<?php

namespace AppBundle\Controller;

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
        // replace this example code with whatever you need
        if ( isset($_SERVER['X-USERNAME']) && ($_SERVER['X-USERNAME'] === 'admin') ) {
            if ( isset($_SERVER['X-PASSWORD']) && ($_SERVER['X-PASSWORD'] === '123456') ) {
                return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
                ]);
            }
        }
        header('HTTP/l.1 401 Unauthorized');
        die();
    }
}