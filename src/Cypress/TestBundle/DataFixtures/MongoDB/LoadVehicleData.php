<?php
/**
 * User: matteo
 * Date: 04/10/13
 * Time: 21.52
 * Just for fun...
 */


namespace Cypress\TestBundle\DataFixtures\MongoDB;


use Cypress\TestBundle\Document\Vehicle\Brand;
use Cypress\TestBundle\Document\Vehicle\Finiture;
use Cypress\TestBundle\Document\Vehicle\Model;
use Doctrine\Common\Persistence\ObjectManager;

class LoadVehicleData extends BaseFixtures
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $brand1 = new Brand();
        $brand1->setName('Fiat');
        $brand2 = new Brand();
        $brand2->setName('BMW');
        for ($i = 1; $i <= 10; $i++) {
            $model = new Model();
            $model->setName('model '.$i);
            $brand = $i % 2 == 0 ? $brand1 : $brand2;
            $brand->addModel($model);
            for ($a = 1; $a <= 20; $a++) {
                $finiture = new Finiture();
                $finiture->setName(sprintf('finiture %s %s', $i, $a));
                $model->addFiniture($finiture);
            }
        }
        $manager->persist($brand1);
        $manager->persist($brand2);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 10;
    }
}