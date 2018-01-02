<?php

namespace DotpayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/dotpay")
     */
    public function indexAction()
    {
        return $this->render('@Dotpay/Default/index.html.twig');
    }
}
