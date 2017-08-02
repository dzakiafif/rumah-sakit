<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 02/08/17
 * Time: 12:57
 */

namespace AppBundle\Contracts\Repository;


use AppBundle\Entity\Drm;

interface DrmInterface
{

    /**
     * @param $id
     * @return Drm
     */
    public function findById($id);
    
    
}