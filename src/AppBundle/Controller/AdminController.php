<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 20/07/17
 * Time: 10:20
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Pasien;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $user = count($em->getRepository(User::class)->findAll());

        return $this->render('AppBundle:home:home.html.twig',['user'=>$user]);
    }

    public function getAllPasienAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Pasien::class)->findAll();

        return $this->render();
    }
}