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
        $qb = $this
            ->get('doctrine.odm.mongodb.document_manager')
            ->getRepository('Cypress\TestBundle\Document\Vehicle\Brand')
            ->createQueryBuilder('Brands');

        $brands = $qb
            ->field('models.finitures')->pull('pippo')
            ->elemMatch($qb->expr()->field('name')->equals('finiture 2 1'))
            //->field('models.finitures.name')->equals('finiture 2 1')
            /*->where('
                function() {

                }
            ')*/
            ->getQuery()
            ->execute();

        return compact('brands');
    }
}
