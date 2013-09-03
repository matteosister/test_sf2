<?php

namespace Cypress\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $products = $this->get('doctrine.odm.mongodb.document_manager')
            ->getRepository('Cypress\TestBundle\Document\Product')->findAll();

        return compact('products');
    }
}
