<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 23/07/17
 * Time: 1:33
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Diagnosa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DiagnosaController extends Controller
{

    public function inputDiagnosaAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if($request->getMethod() == 'POST') {
            $diagnosa = new Diagnosa();
            $diagnosa->setNamaDiagnosa($request->get('nama_diagnosa'));

            $em->persist($diagnosa);
            $em->flush();
            
            return $this->redirect($this->generateUrl('app_admin_daftar_diagnosa'));
        }
        return $this->render('AppBundle:diagnosa:input-diagnosa.html.twig');
    }

    public function listDiagnosaAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Diagnosa::class)->findAll();

        return $this->render('AppBundle:diagnosa:list-diagnosa.html.twig',['data'=>$data]);
    }

}