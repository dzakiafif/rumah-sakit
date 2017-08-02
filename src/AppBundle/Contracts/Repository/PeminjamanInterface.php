<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 02/08/17
 * Time: 15:55
 */

namespace AppBundle\Contracts\Repository;


use AppBundle\Entity\Peminjaman;

interface PeminjamanInterface
{
    /**
     * @param $id
     * @return Peminjaman
     */
    public function findById($id);

    /**
     * @param $drm
     * @return Peminjaman
     */
    public function findByDrmId($drm);

}