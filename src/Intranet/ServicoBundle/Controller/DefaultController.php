<?php

namespace Intranet\ServicoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IntranetServicoBundle:Default:index.html.twig', array('name' => $name));
    }
}
