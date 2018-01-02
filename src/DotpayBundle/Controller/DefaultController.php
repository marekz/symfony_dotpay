<?php

namespace DotpayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\Container;

class DefaultController extends Controller
{
    /**
     * @Route("/dotpay")
     */
    public function indexAction()
    {
	$dotpay_address	    = $this->container->getParameter('dotpay_address');
	$dotpay_id	    = $this->container->getParameter('dotpay_id');
	$dotpay_pin	    = $this->container->getParameter('dotpay_pin');
	var_dump($dotpay_pin);
	
        return $this->render('@Dotpay/Default/index.html.twig');
    }
}
