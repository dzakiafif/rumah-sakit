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
     * @var string
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
        $this->tglSetor = $tglSetor;

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
        $this->tglKembali = $tglKembali;

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
     * @param string $catatanJam
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
     * @return string 
     */
    public function getCatatanJam()
    {
        return $this->catatanJam;
    }
}
