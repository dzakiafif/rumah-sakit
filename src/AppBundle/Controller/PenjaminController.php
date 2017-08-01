<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 23/07/17
 * Time: 2:04
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Penjamin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PenjaminController extends Controller
{

    public function inputPenjaminAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if($request->getMethod() == 'POST') {
            $penjamin = new Penjamin();
            $penjamin->setNamaPenjamin($request->get('nama_penjamin'));

            $em->persist($penjamin);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_penjamin'));
        }
        return $this->render('AppBundle:penjamin:input-penjamin.html.twig');
    }

    public function daftarPenjaminAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Penjamin::class)->findAll();

        return $this->render('AppBundle:penjamin:list-penjamin.html.twig',['data'=>$data]);
    }
    
    public function updatePenjaminAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $data = $em->getRepository(Penjamin::class)->find($id);

        if($request->getMethod() == 'POST') {
            if($data instanceof Penjamin) {
                $data->setNamaPenjamin($request->get('nama_penjamin'));
            }
            $em->persist($data);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_penjamin'));
        }

        return $this->render('AppBundle:penjamin:update-penjamin.html.twig',['data'=>$data]);
    }

    public function deletePenjaminAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Penjamin::class)->find($id);

        $em->remove($data);

        $em->flush();

        return $this->redirect($this->generateUrl('app_admin_daftar_penjamin'));
    }

}