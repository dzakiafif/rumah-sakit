<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 23/07/17
 * Time: 1:38
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Ruangan;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class RuanganController extends Controller
{

    public function inputRuanganAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if($request->getMethod() == 'POST') {
            $ruangan = new Ruangan();
            $ruangan->setNamaRuangan($request->get('nama_ruangan'));

            $em->persist($ruangan);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_ruangan'));
        }

        return $this->render('AppBundle:ruangan:input-ruangan.html.twig');
    }
    
    public function listRuanganAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $data = $em->getRepository(Ruangan::class)->findAll();

        return $this->render('AppBundle:ruangan:list-ruangan.html.twig',['data'=>$data]);
    }

}