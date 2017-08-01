<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 23/07/17
 * Time: 1:53
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Poli;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PoliController extends Controller
{
    
    public function inputPoliAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        if($request->getMethod() == 'POST') {
            $poli = new Poli();
            $poli->setNamaPoli($request->get('nama_poli'));
            
            $em->persist($poli);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_poli'));
        }
        
        return $this->render('AppBundle:poli:input-poli.html.twig');
    }

    public function listPoliAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Poli::class)->findAll();

        return $this->render('AppBundle:poli:list-poli.html.twig',['data'=>$data]);
    }

    public function updatePoliAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Poli::class)->find($id);

        if($request->getMethod() == 'POST') {
            if($data instanceof Poli) {
                $data->setNamaPoli($request->get('nama_poli'));
            }

            $em->persist($data);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_poli'));
        }

        return $this->render('AppBundle:poli:update-poli.html.twig',['data'=>$data]);
    }

    public function deletePoliAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Poli::class)->find($id);

        $em->remove($data);

        $em->flush();

        return $this->redirect($this->generateUrl('app_admin_daftar_poli'));
    }

}