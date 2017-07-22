<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poli
 */
class Poli
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $namaPoli;


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
     * Set namaPoli
     *
     * @param string $namaPoli
     * @return Poli
     */
    public function setNamaPoli($namaPoli)
    {
        $this->namaPoli = $namaPoli;

        return $this;
    }

    /**
     * Get namaPoli
     *
     * @return string 
     */
    public function getNamaPoli()
    {
        return $this->namaPoli;
    }
}
