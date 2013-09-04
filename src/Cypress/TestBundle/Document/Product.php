<?php
/**
 * User: matteo
 * Date: 03/09/13
 * Time: 22.14
 * Just for fun...
 */

namespace Cypress\TestBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Product
 *
 * @MongoDB\Document
 */
class Product
{
    /**
     * @var string
     *
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\String
     */
    private $name;

    /**
     * @MongoDB\Int
     */
    private $price;

    /**
     * @var Image
     *
     * @MongoDB\ReferenceOne(targetDocument="Cypress\TestBundle\Document\Image")
     */
    private $image;

    /**
     * Get Id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Name
     *
     * @param mixed $name the name variable
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Price
     *
     * @param mixed $price the price variable
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get Price
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set Image
     *
     * @param \Cypress\TestBundle\Document\Image $image the image variable
     *
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get Image
     *
     * @return \Cypress\TestBundle\Document\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}