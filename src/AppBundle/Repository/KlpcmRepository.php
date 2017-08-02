<?php

namespace AppBundle\Repository;

use AppBundle\Contracts\Repository\KlpcmInterface;
use AppBundle\Entity\Klpcm;
use Doctrine\ORM\EntityRepository;

/**
 * KlpcmRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class KlpcmRepository extends EntityRepository implements KlpcmInterface
{
    /**
     * @param $id
     * @return Klpcm
     */
    public function findById($id)
    {
        return $this->find($id);
    }

    /**
     * @param $drm
     * @return Klpcm
     */
    public function findByDrmId($drm)
    {
        return $this->findOneBy(['drm'=>$drm]);
    }
}
