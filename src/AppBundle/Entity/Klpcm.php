<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Klpcm
 */
class Klpcm
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $drm;

    /**
     * @var int
     */
    private $poli;

    /**
     * @var int
     */
    private $pr;

    /**
     * @var \DateTime
     */
    private $tglSetor;

    /**
     * @var \DateTime
     */
    private $tglKembali;

    /**
     * @var int
     */
    private $catatanJam;


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
     * @param Drm $drm
     * @return $this
     */
    public function setDrm(Drm $drm)
    {
        $this->drm = $drm;

        return $this;
    }

    /**
     * @return int
     */
    public function getDrm()
    {
        return $this->drm;
    }

    /**
     * @param Poli $poli
     * @return $this
     */
    public function setPoli(Poli $poli)
    {
        $this->poli = $poli;

        return $this;
    }

    /**
     * @return int
     */
    public function getPoli()
    {
        return $this->poli;
    }

    /**
     * Set pr
     *
     * @param integer $pr
     * @return Klpcm
     */
    public function setPr($pr)
    {
        $this->pr = $pr;

        return $this;
    }

    /**
     * Get pr
     *
     * @return integer
     */
    public function getPr()
    {
        return $this->pr;
    }

    /**
     * Set tglSetor
     *
     * @param \DateTime $tglSetor
     * @return Klpcm
     */
    public function setTglSetor($tglSetor)
    {
        $this->tglSetor = new \DateTime($tglSetor);

        return $this;
    }

    /**
     * Get tglSetor
     *
     * @return \DateTime 
     */
    public function getTglSetor()
    {
        return $this->tglSetor;
    }

    /**
     * Set tglKembali
     *
     * @param \DateTime $tglKembali
     * @return Klpcm
     */
    public function setTglKembali($tglKembali)
    {
        $this->tglKembali = new \DateTime($tglKembali);

        return $this;
    }

    /**
     * Get tglKembali
     *
     * @return \DateTime 
     */
    public function getTglKembali()
    {
        return $this->tglKembali;
    }

    /**
     * Set catatanJam
     *
     * @param integer $catatanJam
     * @return Klpcm
     */
    public function setCatatanJam($catatanJam)
    {
        $this->catatanJam = $catatanJam;

        return $this;
    }

    /**
     * Get catatanJam
     *
     * @return int
     */
    public function getCatatanJam()
    {
        return $this->catatanJam;
    }
}
