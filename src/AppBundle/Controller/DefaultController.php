<?php

namespace AppBundle\Controller;

use AppBundle\Form\ChatType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }
//    /**
//     * @Route("/message", name="homepage")
//     */
//      public function chatAction()
//    {
//       $form = $this->createForm(ChatType::class);
//        return $this->render('default/chat.html.twig',array("formulaire"=>$form->createView()));
//    }
}
