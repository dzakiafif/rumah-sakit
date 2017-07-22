<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dokter
 */
class Dokter
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $namaDokter;


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
     * Set namaDokter
     *
     * @param string $namaDokter
     * @return Dokter
     */
    public function setNamaDokter($namaDokter)
    {
        $this->namaDokter = $namaDokter;

        return $this;
    }

    /**
     * Get namaDokter
     *
     * @return string 
     */
    public function getNamaDokter()
    {
        return $this->namaDokter;
    }
}
