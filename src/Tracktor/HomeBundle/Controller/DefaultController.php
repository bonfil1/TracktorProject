<?php

namespace Tracktor\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        //return $this->render('HomeBundle:Default:index.html.twig', array('name' => $name));
        return $this->render('HomeBundle:Default:index.html.twig');
    }
    
    public function ayudaAction(){
        return $this->render('HomeBundle:Default:ayuda.html.twig');
    }
}
