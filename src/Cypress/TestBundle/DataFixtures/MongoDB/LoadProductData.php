<?php
/**
 * User: matteo
 * Date: 03/09/13
 * Time: 22.26
 * Just for fun...
 */

namespace Cypress\TestBundle\DataFixtures\MongoDB;

use Cypress\TestBundle\Document\Product;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProductData extends BaseFixtures
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 1000; $i++) {
            $p = new Product();
            $p->setName('name '.$i);
            $p->setPrice(rand(300, 12000));
            $manager->persist($p);
        }
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 1000;
    }
}