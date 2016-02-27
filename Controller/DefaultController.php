<?php

namespace WeirdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WeirdBundle:Default:index.html.twig');
    }
}
