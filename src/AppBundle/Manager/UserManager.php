<?php

namespace AppBundle\Manager;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class UserManager
{
    /** @var EntityManagerInterface */
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getUsers()
    {
        return $this->em->getRepository(User::class)->findAll();
    }

    public function getUser(int $id)
    {
        return $this->em->getRepository(User::class)->find($id);
    }
}