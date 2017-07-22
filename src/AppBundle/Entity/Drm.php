<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Drm
 */
class Drm
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $tglMrs;

    /**
     * @var \DateTime
     */
    private $tglKrs;

    /**
     * @var string
     */
    private $tglSetor;

    /**
     * @var string
     */
    private $catatanJam;

    /**
     * @var string
     */
    private $kondisiPulang;

    /**
     * @var int
     */
    private $operasi;

    /**
     * @var int
     */
    private $jenisOperasi;

    /**
     * @var int
     */
    private $isValidated;


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
     * Set tglMrs
     *
     * @param \DateTime $tglMrs
     * @return Drm
     */
    public function setTglMrs($tglMrs)
    {
        $this->tglMrs = $tglMrs;

        return $this;
    }

    /**
     * Get tglMrs
     *
     * @return \DateTime 
     */
    public function getTglMrs()
    {
        return $this->tglMrs;
    }

    /**
     * Set tglKrs
     *
     * @param \DateTime $tglKrs
     * @return Drm
     */
    public function setTglKrs($tglKrs)
    {
        $this->tglKrs = $tglKrs;

        return $this;
    }

    /**
     * Get tglKrs
     *
     * @return \DateTime 
     */
    public function getTglKrs()
    {
        return $this->tglKrs;
    }

    /**
     * Set tglSetor
     *
     * @param string $tglSetor
     * @return Drm
     */
    public function setTglSetor($tglSetor)
    {
        $this->tglSetor = $tglSetor;

        return $this;
    }

    /**
     * Get tglSetor
     *
     * @return string 
     */
    public function getTglSetor()
    {
        return $this->tglSetor;
    }

    /**
     * Set catatanJam
     *
     * @param string $catatanJam
     * @return Drm
     */
    public function setCatatanJam($catatanJam)
    {
        $this->catatanJam = $catatanJam;

        return $this;
    }

    /**
     * Get catatanJam
     *
     * @return string 
     */
    public function getCatatanJam()
    {
        return $this->catatanJam;
    }

    /**
     * Set kondisiPulang
     *
     * @param string $kondisiPulang
     * @return Drm
     */
    public function setKondisiPulang($kondisiPulang)
    {
        $this->kondisiPulang = $kondisiPulang;

        return $this;
    }

    /**
     * Get kondisiPulang
     *
     * @return string 
     */
    public function getKondisiPulang()
    {
        return $this->kondisiPulang;
    }

    /**
     * Set operasi
     *
     * @param integer $operasi
     * @return Drm
     */
    public function setOperasi($operasi)
    {
        $this->operasi = $operasi;

        return $this;
    }

    /**
     * Get operasi
     *
     * @return integer 
     */
    public function getOperasi()
    {
        return $this->operasi;
    }

    /**
     * Set jenisOperasi
     *
     * @param integer $jenisOperasi
     * @return Drm
     */
    public function setJenisOperasi($jenisOperasi)
    {
        $this->jenisOperasi = $jenisOperasi;

        return $this;
    }

    /**
     * Get jenisOperasi
     *
     * @return integer 
     */
    public function getJenisOperasi()
    {
        return $this->jenisOperasi;
    }

    /**
     * Set isValidated
     *
     * @param integer $isValidated
     * @return Drm
     */
    public function setIsValidated($isValidated)
    {
        $this->isValidated = $isValidated;

        return $this;
    }

    /**
     * Get isValidated
     *
     * @return integer 
     */
    public function getIsValidated()
    {
        return $this->isValidated;
    }
}
