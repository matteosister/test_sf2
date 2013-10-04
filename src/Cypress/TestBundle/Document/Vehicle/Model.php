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
class Model
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
     * @var ArrayCollection
     *
     * @MongoDB\EmbedMany(targetDocument="Cypress\TestBundle\Document\Vehicle\Finiture")
     */
    private $finitures;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->finitures = new ArrayCollection();
    }

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

    /**
     * Set Finitures
     *
     * @param \Doctrine\Common\Collections\ArrayCollection $finitures the finitures variable
     */
    public function setFinitures($finitures)
    {
        $this->finitures = $finitures;
    }

    /**
     * Get Finitures
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getFinitures()
    {
        return $this->finitures;
    }

    public function addFiniture(Finiture $finiture)
    {
        $this->finitures->add($finiture);
    }
} 