<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 23/07/17
 * Time: 1:58
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Dokter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DokterController extends Controller
{

    public function inputDokterAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if($request->getMethod() == 'POST') {
            $dokter = new Dokter();
            $dokter->setNamaDokter($request->get('nama_dokter'));

            $em->persist($dokter);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_dokter'));
        }
        return $this->render('AppBundle:dokter:input-dokter.html.twig');
    }

    public function listDokterAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Dokter::class)->findAll();

        return $this->render('AppBundle:dokter:list-dokter.html.twig',['data'=>$data]);
    }

    public function deleteDokterAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Dokter::class)->find($id);

        $em->remove($data);

        $em->flush();

        return $this->redirect($this->generateUrl('app_admin_daftar_dokter'));
    }

    public function updateDokterAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Dokter::class)->find($id);

        if($request->getMethod() == 'POST') {
            if($data instanceof Dokter) {
                $data->setNamaDokter($request->get('nama_dokter'));
            }
            $em->persist($data);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_dokter'));
        }
        return $this->render('AppBundle:dokter:update-dokter.html.twig',[
           'data' => $data
        ]);
    }

}