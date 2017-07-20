<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 20/07/17
 * Time: 10:18
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{

    public function loginAction()
    {
        if($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_admin_index');
        }elseif ($this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('AppBundle:default:login.html.twig');
    }

    public function loginCheckAction()
    {
        if($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_admin_index');
        }elseif ($this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('app_user_index');
        }elseif ($this->isGranted('IS_AUTHENTICATED_ANONYMOUSLY')) {
            return $this->redirectToRoute('app_login');
        }
    }

}