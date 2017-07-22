<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 20/07/17
 * Time: 10:20
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Drm;
use AppBundle\Entity\Pasien;
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

        if($request->getMethod() == 'POST') {
            $drm = new Drm();
            $drm->setTglMrs(date('Y-m-d',strtotime($request->get('tgl_mrs'))));
            $drm->setTglKrs(date('Y-m-d',strtotime($request->get('tgl_krs'))));
            $drm->setTglSetor(date('Y-m-d',strtotime($request->get('tgl_setor'))));
            $drm->setCatatanJam(date('h:i',strtotime($request->get('catatan_jam'))));
            $drm->setKondisiPulang($request->get('kondisi_pulang'));
            $drm->setOperasi($request->get('operasi'));
            
            $em->persist($drm);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_drm'));
        }

        return $this->render('AppBundle:drm:input-drm.html.twig');
    }

    public function getAllDrmAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Drm::class)->findAll();

        return $this->render('AppBundle:drm:list-drm.html.twig',['data'=>$data]);
    }
}