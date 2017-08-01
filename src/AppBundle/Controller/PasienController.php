<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 25/05/17
 * Time: 13:50
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Pasien;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PasienController extends Controller
{
    public function inputPasienAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();

        if($request->getMethod() == 'POST')
        {
            $pasien = new Pasien();
            $pasien->setKodeRm($request->get('kode_rm'));
            $pasien->setNamaPasien($request->get('nama_pasien'));
            $pasien->setTglLahir(date('Y-m-d',strtotime($request->get('tgl_lahir'))));
            $pasien->setAlamatPasien($request->get('alamat_pasien'));
            $pasien->setJenisKelamin($request->get('jenis_kelamin'));

            $em->persist($pasien);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_pasien'));
        }

        return $this->render('AppBundle:pasien:input-pasien.html.twig');

    }

    public function getAllPasienAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Pasien::class)->findAll();

        return $this->render('AppBundle:pasien:pasien.html.twig',['data'=>$data]);
    }

    public function deletePasienAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Pasien::class)->find($id);

        $em->remove($data);

        $em->flush();

        return $this->redirect($this->generateUrl('app_admin_daftar_pasien'));
    }

    public function updatePasienAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $data = $em->getRepository(Pasien::class)->find($id);

        if($request->getMethod() == 'POST') {
            if($data instanceof Pasien) {

            }

            $em->persist($data);
            $em->flush();

            return $this->redirect($this->generateUrl('app_admin_daftar_pasien'));
        }

        return $this->render('AppBundle:pasien:update-pasien.html.twig',['data'=>$data]);

    }
}