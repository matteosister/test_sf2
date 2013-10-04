<?php
/**
 * User: matteo
 * Date: 04/10/13
 * Time: 21.48
 * Just for fun...
 */

namespace Cypress\TestBundle\Document\Vehicle;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Image
 *
 * @MongoDB\EmbeddedDocument
 */
class Finiture
{
    /**
     * @var int
     *
     * @MongoDB\Id
     */
    private $id;

    /**
     * @var string
     *
     * @MongoDB\String
     */
    private $name;

    /**
     * Get Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Name
     *
     * @param string $name the name variable
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
} 