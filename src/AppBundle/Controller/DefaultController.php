<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }

//    public function createAdminAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getEntityManager();
//
//        if($request->getMethod() == 'POST'){
//            $asem = new User();
//
//            $kampret = $asem->createUser($request);
//
//            $em->persist($kampret);
//
//            $em->flush();
//
//            return 'data berhasil masuk';
//        }
//
//        return 'ok';
//    }
//
//    public function updateAdminAction(Request $request)
//    {
//        if($request->getSession()->get('uname') == null){
//            return $this->redirect('/login');
//        }
//
//        $em = $this->getDoctrine()->getEntityManager();
//
//        $data = $em->getRepository(User::class)->findById($request->getSession()->get('uid'));
//
//        if($request->getMethod() == 'POST'){
//            if($data instanceof User){
//                $data->setUsername($request->get('username'));
//                $data->setPassword($request->get('password'));
//                $data->setRole($request->get('role'));
//
//                $em->persist($data);
//                $em->flush();
//
//                return 'data berhasil diupdate';
//            }
//        }
//        return 'ok';
//    }
//
//    public function deleteAdminAction(Request $request,$id)
//    {
//        if($request->getSession()->get('uname') == null){
//            return $this->redirect('/login');
//        }
//
//        $em = $this->getDoctrine()->getEntityManager();
//
//        $data = $em->getRepository(User::class)->findById($id);
//
//        $em->remove($data);
//
//        $em->flush();
//
//        return 'data berhasil dihapus';
//    }
//
//    public function viewAction(Request $request)
//    {
//        if($request->getSession()->get('uname') == null){
//            return $this->redirect('/login');
//        }
//
//        return $this->render('');
//    }
//
//    public function showAdminAction(Request $request)
//    {
//        if($request->getSession()->get('uname') == null){
//            return $this->redirect('/login');
//        }
//
//        $em = $this->getDoctrine()->getEntityManager();
//
//        $data = $em->getRepository(User::class)->findAll();
//
//        if($data == null){
//            return 'data kosong';
//        }
//
//        return 'ok';
//    }
//
//    public function loginAction(Request $request)
//    {
//
//        if($request->getMethod() == 'POST'){
//            $username = $request->get('username');
//            $password = md5($request->get('password'));
//
//            $em = $this->getDoctrine()->getEntityManager();
//
//            $data = $em->getRepository(User::class)->findByUsername($username);
//
//        if($data instanceof User){
//            if($data != null){
//                if($password == $data->getPassword()){
//                    $session = $request->getSession();
//
//                    $session->set('uid',['value'=>$data->getId()]);
//                    $session->set('uname',['value'=>$data->getUsername()]);
//                    $session->set('role',['value'=>$data->getRole()]);
//
//                    return 'berhasil login';
//                }else{
//                    return 'password anda salah';
//                }
//            }else{
//                return 'data tidak ditemukan';
//            }
//        }
//
//        }
//        return 'OK';
//    }
//
//    public function logoutAction(Request $request)
//    {
//        $session = $request->getSession();
//        $session->clear();
//
//        return $this->redirect('/login');
//    }

}
