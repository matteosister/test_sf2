<?php
/**
 * User: matteo
 * Date: 03/09/13
 * Time: 22.26
 * Just for fun...
 */

namespace Cypress\TestBundle\DataFixtures\MongoDB;

use Cypress\TestBundle\Document\Image;
use Cypress\TestBundle\Document\Product;
use Doctrine\Common\Persistence\ObjectManager;

class LoadImageData extends BaseFixtures
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $image = new Image();
        $image->setName('image file');
        $image->setFile(realpath(__DIR__.'/../nikon.png'));
        $manager->persist($image);
        $manager->flush();
        $this->setReference('image', $image);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 900;
    }
}