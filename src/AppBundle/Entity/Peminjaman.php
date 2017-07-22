<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Peminjaman
 */
class Peminjaman
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $tglPeminjaman;

    /**
     * @var string
     */
    private $namaPeminjam;

    /**
     * @var string
     */
    private $petugasRekamMedis;

    /**
     * @var \DateTime
     */
    private $tglKembali;

    /**
     * @var string
     */
    private $namaPengembalian;


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
     * Set tglPeminjaman
     *
     * @param \DateTime $tglPeminjaman
     * @return Peminjaman
     */
    public function setTglPeminjaman($tglPeminjaman)
    {
        $this->tglPeminjaman = $tglPeminjaman;

        return $this;
    }

    /**
     * Get tglPeminjaman
     *
     * @return \DateTime 
     */
    public function getTglPeminjaman()
    {
        return $this->tglPeminjaman;
    }

    /**
     * Set namaPeminjam
     *
     * @param string $namaPeminjam
     * @return Peminjaman
     */
    public function setNamaPeminjam($namaPeminjam)
    {
        $this->namaPeminjam = $namaPeminjam;

        return $this;
    }

    /**
     * Get namaPeminjam
     *
     * @return string 
     */
    public function getNamaPeminjam()
    {
        return $this->namaPeminjam;
    }

    /**
     * Set petugasRekamMedis
     *
     * @param string $petugasRekamMedis
     * @return Peminjaman
     */
    public function setPetugasRekamMedis($petugasRekamMedis)
    {
        $this->petugasRekamMedis = $petugasRekamMedis;

        return $this;
    }

    /**
     * Get petugasRekamMedis
     *
     * @return string 
     */
    public function getPetugasRekamMedis()
    {
        return $this->petugasRekamMedis;
    }

    /**
     * Set tglKembali
     *
     * @param \DateTime $tglKembali
     * @return Peminjaman
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
     * Set namaPengembalian
     *
     * @param string $namaPengembalian
     * @return Peminjaman
     */
    public function setNamaPengembalian($namaPengembalian)
    {
        $this->namaPengembalian = $namaPengembalian;

        return $this;
    }

    /**
     * Get namaPengembalian
     *
     * @return string 
     */
    public function getNamaPengembalian()
    {
        return $this->namaPengembalian;
    }
}
