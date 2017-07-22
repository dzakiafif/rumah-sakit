<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operasi
 */
class Operasi
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $namaOperasi;


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
     * Set namaOperasi
     *
     * @param string $namaOperasi
     * @return Operasi
     */
    public function setNamaOperasi($namaOperasi)
    {
        $this->namaOperasi = $namaOperasi;

        return $this;
    }

    /**
     * Get namaOperasi
     *
     * @return string 
     */
    public function getNamaOperasi()
    {
        return $this->namaOperasi;
    }
}
