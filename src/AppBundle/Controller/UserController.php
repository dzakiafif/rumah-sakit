<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 20/07/17
 * Time: 10:19
 */

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    public function indexAction()
    {
        return $this->render('AppBundle:home:home.html.twig');
    }
    
    public function registerAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        if($request->getMethod() == 'POST')
        {
            $user = new User();

            $data = $user->createUser($request);
            $data->setRoles(serialize(['ROLE_USER']));

            $em->persist($data);
            $em->flush();

            return $this->redirect($this->generateUrl('app_login'));
        }
        
        return $this->render('AppBundle:default:register.html.twig');
    }

    public function logoutAction(Request $request)
    {
        $session = $request->getSession();

        $session->clear();

        return $this->redirect($this->generateUrl('app_login'));
    }

}