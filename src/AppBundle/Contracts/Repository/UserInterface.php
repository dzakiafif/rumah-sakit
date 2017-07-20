<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 24/05/17
 * Time: 4:06
 */

namespace AppBundle\Contracts\Repository;


use AppBundle\Entity\User;

interface UserInterface
{

    /**
     * @param $id
     * @return User
     */
    public function findById($id);

    /**
     * @param $username
     * @return User
     */
    public function findByUsername($username);

    /**
     * @param $role
     * @return User
     */
    public function findByRole($role);

}