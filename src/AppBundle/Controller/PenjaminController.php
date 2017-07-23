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
        }
        return $this->render('AppBundle:penjamin:input-penjamin.html.twig');
    }

    public function listPenjaminAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Penjamin::class)->findAll();

        return $this->render('AppBundle:penjamin:list-penjamin.html.twig',['data'=>$data]);
    }

}