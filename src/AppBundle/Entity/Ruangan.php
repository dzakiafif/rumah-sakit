<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ruangan
 */
class Ruangan
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $namaRuangan;


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
     * Set namaRuangan
     *
     * @param string $namaRuangan
     * @return Ruangan
     */
    public function setNamaRuangan($namaRuangan)
    {
        $this->namaRuangan = $namaRuangan;

        return $this;
    }

    /**
     * Get namaRuangan
     *
     * @return string 
     */
    public function getNamaRuangan()
    {
        return $this->namaRuangan;
    }
}
