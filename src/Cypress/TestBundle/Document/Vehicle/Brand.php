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
 * @MongoDB\Document
 */
class Brand
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
     * @MongoDB\EmbedMany(targetDocument="Cypress\TestBundle\Document\Vehicle\Model")
     */
    private $models;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->models = new ArrayCollection();
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
     * Set Models
     *
     * @param \Doctrine\Common\Collections\ArrayCollection $models the models variable
     */
    public function setModels($models)
    {
        $this->models = $models;
    }

    /**
     * Get Models
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getModels()
    {
        return $this->models;
    }

    /**
     * @param Model $model
     */
    public function addModel(Model $model)
    {
        $this->models->add($model);
    }
} 