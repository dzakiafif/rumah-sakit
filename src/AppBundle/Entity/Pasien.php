<?php

namespace AppBundle\Entity;

use Doctrine\DBAL\Exception\ReadOnlyException;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pasien
 */
class Pasien
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $kodeRm;

    /**
     * @var string
     */
    private $namaPasien;

    /**
     * @var \DateTime
     */
    private $tglLahir;

    /**
     * @var string
     */
    private $alamatPasien;

    /**
     * @var \DateTime
     */
    private $tanggalDaftar;

    /**
     * @var \DateTime
     */
    private $jamDaftar;

    /**
     * @var int
     */
    private $jenisKelamin;

    /**
     * @var int
     */
    private $isValidated;

    /**
     * @var int
     */
    private $isDeleted;

    public static function create($kodeRm,$namaPasien,$tglLahir,$alamatPasien,$tanggalDaftar,$jamDaftar,$jenisKelamin)
    {
        $pasien = new Pasien();
        $pasien->setKodeRm($kodeRm);
        $pasien->setNamaPasien($namaPasien);
        $pasien->setTglLahir($tglLahir);
        $pasien->setAlamatPasien($alamatPasien);
        $pasien->setTanggalDaftar($tanggalDaftar);
        $pasien->setJamDaftar($jamDaftar);
        $pasien->setJenisKelamin($jenisKelamin);
        $pasien->setIsValidated(0);

        return $pasien;

    }

    public function createPasien(Request $request)
    {
        $kodeRm = $request->get('kode-rm');
        $namaPasien = $request->get('nama-pasien');
        $tglLahir = $request->get('tgl-lahir');
        $alamatPasien = $request->get('alamat-pasien');
        $tanggalDaftar = $request->get('tanggal-daftar');
        $jamDaftar = $request->get('jam-daftar');
        $jenisKelamin = $request->get('jenis-kelamin');

        $createPasien = Pasien::create($kodeRm,$namaPasien,$tglLahir,$alamatPasien,$tanggalDaftar,$jamDaftar,$jenisKelamin);

        return $createPasien;
    }


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
     * Set kodeRm
     *
     * @param string $kodeRm
     * @return Pasien
     */
    public function setKodeRm($kodeRm)
    {
        $this->kodeRm = $kodeRm;

        return $this;
    }

    /**
     * Get kodeRm
     *
     * @return string 
     */
    public function getKodeRm()
    {
        return $this->kodeRm;
    }

    /**
     * Set namaPasien
     *
     * @param string $namaPasien
     * @return Pasien
     */
    public function setNamaPasien($namaPasien)
    {
        $this->namaPasien = $namaPasien;

        return $this;
    }

    /**
     * Get namaPasien
     *
     * @return string 
     */
    public function getNamaPasien()
    {
        return $this->namaPasien;
    }

    /**
     * Set tglLahir
     *
     * @param \DateTime $tglLahir
     * @return Pasien
     */
    public function setTglLahir($tglLahir)
    {
        $this->tglLahir = new \DateTime($tglLahir);

        return $this;
    }

    /**
     * Get tglLahir
     *
     * @return \DateTime 
     */
    public function getTglLahir()
    {
        return $this->tglLahir;
    }

    /**
     * Set alamatPasien
     *
     * @param string $alamatPasien
     * @return Pasien
     */
    public function setAlamatPasien($alamatPasien)
    {
        $this->alamatPasien = $alamatPasien;

        return $this;
    }

    /**
     * Get alamatPasien
     *
     * @return string 
     */
    public function getAlamatPasien()
    {
        return $this->alamatPasien;
    }

    /**
     * Set tanggalDaftar
     *
     * @param \DateTime $tanggalDaftar
     * @return Pasien
     */
    public function setTanggalDaftar($tanggalDaftar)
    {
        $this->tanggalDaftar =  new \DateTime($tanggalDaftar);

        return $this;
    }

    /**
     * Get tanggalDaftar
     *
     * @return \DateTime 
     */
    public function getTanggalDaftar()
    {
        return $this->tanggalDaftar;
    }

    /**
     * Set jamDaftar
     *
     * @param \DateTime $jamDaftar
     * @return Pasien
     */
    public function setJamDaftar($jamDaftar)
    {
        $this->jamDaftar = $jamDaftar;

        return $this;
    }

    /**
     * Get jamDaftar
     *
     * @return \DateTime 
     */
    public function getJamDaftar()
    {
        return $this->jamDaftar;
    }

    /**
     * Set jenisKelamin
     *
     * @param integer $jenisKelamin
     * @return Pasien
     */
    public function setJenisKelamin($jenisKelamin)
    {
        $this->jenisKelamin = $jenisKelamin;

        return $this;
    }

    /**
     * Get jenisKelamin
     *
     * @return integer 
     */
    public function getJenisKelamin()
    {
        return $this->jenisKelamin;
    }

    /**
     * Set isValidated
     *
     * @param integer $isValidated
     * @return Pasien
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

    /**
     * Set isDeleted
     *
     * @param integer $isDeleted
     * @return Pasien
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return integer 
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }
}
