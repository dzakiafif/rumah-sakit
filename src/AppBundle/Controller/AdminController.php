<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 20/07/17
 * Time: 10:20
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Diagnosa;
use AppBundle\Entity\Dokter;
use AppBundle\Entity\Drm;
use AppBundle\Entity\Klpcm;
use AppBundle\Entity\Pasien;
use AppBundle\Entity\Peminjaman;
use AppBundle\Entity\Penjamin;
use AppBundle\Entity\Poli;
use AppBundle\Entity\Ruangan;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $user = count($em->getRepository(User::class)->findAll());

        $klpcm = count($em->getRepository(Klpcm::class)->findAll());

        $peminjaman = count($em->getRepository(Peminjaman::class)->findAll());

        $qb = $em->createQueryBuilder();

        $qb->select('u')->from(Drm::class,'u')->where('u.jenisBerkas = 1');

        $filling = count($qb->getQuery()->getResult());

        return $this->render('AppBundle:home:home.html.twig',[
            'user'=>$user,
            'klpcm' => $klpcm,
            'peminjaman' => $peminjaman,
            'filling' => $filling
        ]);
    }

    public function inputDrmAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $diagnosa = $em->getRepository(Diagnosa::class)->findAll();

        $pasien = $em->getRepository(Pasien::class)->findAll();

        $penjamin = $em->getRepository(Penjamin::class)->findAll();

        $dokter = $em->getRepository(Dokter::class)->findAll();

        $ruangan = $em->getRepository(Ruangan::class)->findAll();

        if($request->getMethod() == 'POST') {
            $drm = new Drm();
            $drm->setTglMrs(date('Y-m-d',strtotime($request->get('tgl_mrs'))));
            $drm->setTglKrs(date('Y-m-d',strtotime($request->get('tgl_krs'))));
            $drm->setTglSetor(date('Y-m-d',strtotime($request->get('tgl_setor'))));
            $drm->setCatatanJam($request->get('catatan_jam'));
            $drm->setPasien($em->getRepository(Pasien::class)->find($request->get('pasien')));
            $drm->setDiagnosa($em->getRepository(Diagnosa::class)->find($request->get('diagnosa')));
            $drm->setPenjamin($em->getRepository(Penjamin::class)->find($request->get('penjamin')));
            $drm->setDokter($em->getRepository(Dokter::class)->find($request->get('dokter')));
            $drm->setRuangan($em->getRepository(Ruangan::class)->find($request->get('ruangan')));
            $drm->setKondisiPulang($request->get('kondisi_pulang'));
            $drm->setRujukan($request->get('rujukan'));
            $drm->setOperasi($request->get('operasi'));
            $drm->setJenisBerkas($request->get('jenis_berkas'));

//            return var_dump($drm);
            
            $em->persist($drm);

            $em->flush();

            if($drm instanceof Drm) {
                if ($drm->getJenisBerkas() == 1) {
                    return $this->redirect($this->generateUrl('app_admin_daftar_filling'));
                }elseif ($drm->getJenisBerkas() == 2) {
                    return $this->redirect($this->generateUrl('app_admin_list_klpcm'));
                }else {
                    return $this->redirect($this->generateUrl('app_admin_daftar_peminjaman'));
                }
            }
        }

        return $this->render('AppBundle:drm:input-drm.html.twig',[
            'diagnosa' => $diagnosa,
            'pasien' => $pasien,
            'penjamin' => $penjamin,
            'dokter' => $dokter,
            'ruangan' => $ruangan
        ]);
    }

    public function getAllDrmAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Drm::class)->findAll();

        return $this->render('AppBundle:drm:list-drm.html.twig',['data'=>$data]);
    }

    public function updateDrmAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $diagnosa = $em->getRepository(Diagnosa::class)->findAll();

        $pasien = $em->getRepository(Pasien::class)->findAll();

        $penjamin = $em->getRepository(Penjamin::class)->findAll();

        $dokter = $em->getRepository(Dokter::class)->findAll();

        $ruangan = $em->getRepository(Ruangan::class)->findAll();

        $drm = $em->getRepository(Drm::class)->find($id);

        if($request->getMethod() == 'POST') {
            $drm->setTglMrs(date('Y-m-d',strtotime($request->get('tgl_mrs'))));
            $drm->setTglKrs(date('Y-m-d',strtotime($request->get('tgl_krs'))));
            $drm->setTglSetor(date('Y-m-d',strtotime($request->get('tgl_setor'))));
            $drm->setCatatanJam($request->get('catatan_jam'));
            $drm->setPasien($em->getRepository(Pasien::class)->find($request->get('pasien')));
            $drm->setDiagnosa($em->getRepository(Diagnosa::class)->find($request->get('diagnosa')));
            $drm->setPenjamin($em->getRepository(Penjamin::class)->find($request->get('penjamin')));
            $drm->setDokter($em->getRepository(Dokter::class)->find($request->get('dokter')));
            $drm->setRuangan($em->getRepository(Ruangan::class)->find($request->get('ruangan')));
            $drm->setKondisiPulang($request->get('kondisi_pulang'));
            $drm->setRujukan($request->get('rujukan'));
            $drm->setOperasi($request->get('operasi'));
            $drm->setJenisBerkas($request->get('jenis_berkas'));

//            return var_dump($drm);

            $em->persist($drm);

            $em->flush();

            if($drm instanceof Drm) {
                if ($drm->getJenisBerkas() == 1) {
                    return $this->redirect($this->generateUrl('app_admin_daftar_filling'));
                }elseif ($drm->getJenisBerkas() == 2) {
                    return $this->redirect($this->generateUrl('app_admin_list_klpcm'));
                }else {
                    return $this->redirect($this->generateUrl('app_admin_daftar_peminjaman'));
                }
            }
        }
        return $this->render('AppBundle:drm:update-drm.html.twig',[
            'drm'=>$drm,
            'diagnosa' => $diagnosa,
            'pasien' => $pasien,
            'penjamin' => $penjamin,
            'dokter' => $dokter,
            'ruangan' => $ruangan
        ]);
    }

    public function getAllFillingAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $qb = $em->createQueryBuilder();

        $qb->select('u')->from(Drm::class,'u')->where('u.jenisBerkas = 1');

        $data = $qb->getQuery()->getResult();
        
        return $this->render('AppBundle:filling:list-filling.html.twig',[
            'data'=>$data
        ]);
    }

    public function getAllPeminjamanAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $qb = $em->createQueryBuilder();

        $qb->select('u')->from(Drm::class,'u')->where('u.jenisBerkas = 3');

        $data = $qb->getQuery()->getResult();

        return $this->render('AppBundle:peminjaman:list-peminjaman.html.twig',[
            'data'=>$data
        ]);
    }
    
    public function getAllKlpcmAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $qb = $em->createQueryBuilder();
        
        $qb->select('u')->from(Drm::class,'u')->where('u.jenisBerkas = 2');
        
        $data = $qb->getQuery()->getResult();
        
        return $this->render('AppBundle:klpcm:list-klpcm.html.twig',[
            'data' => $data
        ]);
    }

    public function updateKlpcmAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $drm = $em->getRepository(Drm::class)->find($id);

        $klpcm = $em->getRepository(Klpcm::class)->findByDrmId($drm->getId());

        $poli = $em->getRepository(Poli::class)->findAll();

        if($request->getMethod() == 'POST') {
            if($klpcm == null) {
                $klpcm = new Klpcm();
                $klpcm->setPr($request->get('pr'));
                $klpcm->setDrm($drm);
                $klpcm->setPoli($em->getRepository(Poli::class)->find($request->get('poli')));
                $klpcm->setCatatanJam($request->get('catatan_jam'));
                $klpcm->setTglSetor(date('Y-m-d',strtotime($request->get('tgl_setor'))));
                $klpcm->setTglKembali(date('Y-m-d',strtotime($request->get('tgl_kembali'))));

//                $drm->setJenisBerkas($request->get('jenis_berkas'));
//                $em->persist($drm);
            }else{
                if($klpcm instanceof Klpcm ) {
                    $klpcm->setPr($request->get('pr'));
                    $klpcm->setDrm($drm);
                    $klpcm->setPoli($em->getRepository(Poli::class)->find($request->get('poli')));
                    $klpcm->setCatatanJam($request->get('catatan_jam'));
                    $klpcm->setTglSetor(date('Y-m-d',strtotime($request->get('tgl_setor'))));
                    $klpcm->setTglKembali(date('Y-m-d',strtotime($request->get('tgl_kembali'))));

                }
            }


//            return var_dump($klpcm);
            $em->persist($klpcm);

            $drm->setJenisBerkas($request->get('jenis_berkas'));
            $em->persist($drm);

//            return var_dump($drm);

            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_list_klpcm'));
        }

        return $this->render('AppBundle:klpcm:update-klpcm.html.twig',[
            'klpcm'=>$klpcm,
            'poli' => $poli,
            'drm' => $drm
        ]);
    }

    public function getDetailKlpcmAction($id) {

        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Klpcm::class)->find($id);

//        return var_dump($asem);

        return $this->render('AppBundle:klpcm:detail-klpcm.html.twig',[
            'data'=> $data
        ]);
    }

    public function updatePeminjamanAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $drm = $em->getRepository(Drm::class)->find($id);

        $peminjaman = $em->getRepository(Peminjaman::class)->findByDrmId($drm->getId());

        if($request->getMethod() == 'POST') {
            if($peminjaman == null) {
                $peminjaman = new Peminjaman();
                $peminjaman->setDrm($drm);
                $peminjaman->setNamaPeminjam($request->get('nama_peminjam'));
                $peminjaman->setPetugasRekamMedis($request->get('petugas'));
                $peminjaman->setTglPeminjaman(date('Y-m-d',strtotime($request->get('tgl_peminjam'))));
                $peminjaman->setTglKembali(date('Y-m-d',strtotime($request->get('tgl_kembali'))));
                $peminjaman->setNamaPengembalian($request->get('nama_pengembalian'));
                $peminjaman->setUnitPeminjam($request->get('unit_peminjam'));
                $peminjaman->setUnitPengembalian($request->get('unit_pengembalian'));
            }else {
                if($peminjaman instanceof Peminjaman) {
                    $peminjaman->setDrm($drm);
                    $peminjaman->setNamaPeminjam($request->get('nama_peminjam'));
                    $peminjaman->setPetugasRekamMedis($request->get('petugas'));
                    $peminjaman->setTglPeminjaman(date('Y-m-d',strtotime($request->get('tgl_peminjam'))));
                    $peminjaman->setTglKembali(date('Y-m-d',strtotime($request->get('tgl_kembali'))));
                    $peminjaman->setNamaPengembalian($request->get('nama_pengembalian'));
                    $peminjaman->setUnitPeminjam($request->get('unit_peminjam'));
                    $peminjaman->setUnitPengembalian($request->get('unit_pengembalian'));
                }
            }

            $em->persist($peminjaman);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_peminjaman'));
        }

        return $this->render('AppBundle:peminjaman:update-peminjaman.html.twig',['peminjam'=>$peminjaman]);
        
    }

    public function allDetailPeminjamanAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Peminjaman::class)->find($id);

        return $this->render('AppBundle:peminjaman:detail-peminjaman.html.twig',['data'=>$data]);
    }

}