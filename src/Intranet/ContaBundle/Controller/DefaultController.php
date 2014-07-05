<?php

namespace Intranet\Bundle\ContaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IntranetContaBundle:Default:index.html.twig', array('name' => $name));
    }
}
