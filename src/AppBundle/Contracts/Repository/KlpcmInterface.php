<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 02/08/17
 * Time: 12:59
 */

namespace AppBundle\Contracts\Repository;


use AppBundle\Entity\Klpcm;

interface KlpcmInterface
{

    /**
     * @param $id
     * @return Klpcm
     */
    public function findById($id);

    /**
     * @param $drm
     * @return Klpcm
     */
    public function findByDrmId($drm);

}