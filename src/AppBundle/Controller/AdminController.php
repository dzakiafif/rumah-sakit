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
use AppBundle\Entity\Pasien;
use AppBundle\Entity\Penjamin;
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

        return $this->render('AppBundle:home:home.html.twig',['user'=>$user]);
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
            $drm->setCatatanJam(date('h:i',strtotime($request->get('catatan_jam'))));
            $drm->setPasien($em->getRepository(Pasien::class)->find($request->get('pasien')));
            $drm->setDiagnosaId($em->getRepository(Diagnosa::class)->find($request->get('diagnosa')));
            $drm->setPenjamin($em->getRepository(Penjamin::class)->find($request->get('penjamin')));
            $drm->setDokter($em->getRepository(Dokter::class)->find($request->get('dokter')));
            $drm->setRuangan($em->getRepository(Ruangan::class)->find($request->get('ruangan')));
            $drm->setKondisiPulang($request->get('kondisi_pulang'));
            $drm->setOperasi($request->get('operasi'));
            $drm->setJenisBerkas($request->get('jenis_berkas'));

//            return var_dump($drm);
            
            $em->persist($drm);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_drm'));
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
}