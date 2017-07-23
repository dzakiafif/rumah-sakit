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
        }
        
        return $this->render('AppBundle:poli:input-poli.html.twig');
    }

    public function listPoliAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Poli::class)->findAll();

        return $this->render('AppBundle:poli:list-poli.html.twig',['data'=>$data]);
    }

}