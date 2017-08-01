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
     * @var int
     */
    private $diagnosaId;

    /**
     * @var int
     */
    private $pasien;

    /**
     * @var int
     */
    private $penjamin;

    /**
     * @var int
     */
    private $dokter;

    /**
     * @var int
     */
    private $ruangan;
    /**
     * @var \DateTime
     */
    private $tglKrs;

    /**
     * @var \DateTime
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
    private $jenisBerkas;

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
        $this->tglMrs = new \DateTime($tglMrs);

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
        $this->tglKrs = new \DateTime($tglKrs);

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
     * @param int $diagnosaId
     * @return Drm
     */
    public function setDiagnosaId(Diagnosa $diagnosaId)
    {
        $this->diagnosaId = $diagnosaId;

        return $this;
    }

    /**
     * @return int
     */
    public function getDiagnosaId()
    {
        return $this->diagnosaId;
    }

    /**
     * @param $pasien
     * @return Drm
     */
    public function setPasien(Pasien $pasien)
    {
        $this->pasien = $pasien;

        return $this;
    }

    /**
     * @return int
     */
    public function getPasien()
    {
        return $this->pasien;
    }

    /**
     * @param $penjamin
     * @return $this
     */
    public function setPenjamin($penjamin)
    {
        $this->penjamin = $penjamin;

        return $this;
    }

    public function getPenjamin()
    {
        return $this->penjamin;
    }

    /**
     * @param integer $dokter
     * @return Drm
     */
    public function setDokter($dokter)
    {
        $this->dokter = $dokter;

        return $this;
    }

    /**
     * @return int
     */
    public function getDokter()
    {
        return $this->dokter;
    }

    /**
     * @param integer $ruangan
     * @return Drm
     */
    public function setRuangan($ruangan)
    {
        $this->ruangan = $ruangan;

        return $this;
    }

    /**
     * @return int
     */
    public function getRuangan()
    {
       return $this->ruangan;
    }
    /**
     * Set tglSetor
     *
     * @param \DateTime $tglSetor
     * @return Drm
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
     * Set catatanJam
     *
     * @param string $catatanJam
     * @return Drm
     */
    public function setCatatanJam($catatanJam)
    {
        $this->catatanJam = new \DateTime($catatanJam);

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
     * @param integer @jenisBerkas
     * @return Drm
     */
    public function setJenisBerkas($jenisBerkas)
    {
        $this->jenisBerkas = $jenisBerkas;

        return $this;
    }

    /**
     * @return int
     */
    public function getJenisBerkas()
    {
        return $this->jenisBerkas;
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
