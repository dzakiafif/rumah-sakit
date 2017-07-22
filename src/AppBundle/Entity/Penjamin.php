<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Penjamin
 */
class Penjamin
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $namaPenjamin;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set namaPenjamin
     *
     * @param string $namaPenjamin
     * @return Penjamin
     */
    public function setNamaPenjamin($namaPenjamin)
    {
        $this->namaPenjamin = $namaPenjamin;

        return $this;
    }

    /**
     * Get namaPenjamin
     *
     * @return string 
     */
    public function getNamaPenjamin()
    {
        return $this->namaPenjamin;
    }
}
