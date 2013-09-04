<?php
/**
 * User: matteo
 * Date: 04/09/13
 * Time: 22.23
 * Just for fun...
 */

namespace Cypress\TestBundle\Document;

use Doctrine\MongoDB\GridFSFile;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Image
 *
 * @MongoDB\Document
 */
class Image
{
    /**
     * @var string
     *
     * @MongoDB\Id
     */
    private $id;

    /**
     * @var string
     *
     * @MongoDB\Field
     */
    private $name;

    /**
     * @var GridFSFile
     *
     * @MongoDB\File
     */
    private $file;

    /**
     * @MongoDB\Field
     */
    private $uploadDate;

    /**
     * @MongoDB\Field
     */
    private $length;

    /**
     * @MongoDB\Field
     */
    private $chunkSize;

    /**
     * @MongoDB\Field
     */
    private $md5;

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
     * @param string $name the name variable
     *
     * @return Image
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set File
     *
     * @param GridFSFile $file the file variable
     *
     * @return Image
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get File
     *
     * @return GridFSFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set ChunkSize
     *
     * @param mixed $chunkSize the chunkSize variable
     *
     * @return Image
     */
    public function setChunkSize($chunkSize)
    {
        $this->chunkSize = $chunkSize;

        return $this;
    }

    /**
     * Get ChunkSize
     *
     * @return mixed
     */
    public function getChunkSize()
    {
        return $this->chunkSize;
    }

    /**
     * Set Length
     *
     * @param mixed $length the length variable
     *
     * @return Image
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get Length
     *
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set Md5
     *
     * @param mixed $md5 the md5 variable
     *
     * @return Image
     */
    public function setMd5($md5)
    {
        $this->md5 = $md5;

        return $this;
    }

    /**
     * Get Md5
     *
     * @return mixed
     */
    public function getMd5()
    {
        return $this->md5;
    }

    /**
     * Set UploadDate
     *
     * @param mixed $uploadDate the uploadDate variable
     *
     * @return Image
     */
    public function setUploadDate($uploadDate)
    {
        $this->uploadDate = $uploadDate;

        return $this;
    }

    /**
     * Get UploadDate
     *
     * @return mixed
     */
    public function getUploadDate()
    {
        return $this->uploadDate;
    }
}