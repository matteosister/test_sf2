<?php
/**
 * User: matteo
 * Date: 03/09/13
 * Time: 22.26
 * Just for fun...
 */

namespace Cypress\TestBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

abstract class BaseFixtures extends AbstractFixture implements OrderedFixtureInterface
{
}