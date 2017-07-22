<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diagnosa
 */
class Diagnosa
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $namaDiagnosa;


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
     * Set namaDiagnosa
     *
     * @param string $namaDiagnosa
     * @return Diagnosa
     */
    public function setNamaDiagnosa($namaDiagnosa)
    {
        $this->namaDiagnosa = $namaDiagnosa;

        return $this;
    }

    /**
     * Get namaDiagnosa
     *
     * @return string 
     */
    public function getNamaDiagnosa()
    {
        return $this->namaDiagnosa;
    }
}
