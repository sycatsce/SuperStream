<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Comments;
use Doctrine\ORM\EntityManagerInterface;

class CommentsManager
{
    /** @var EntityManagerInterface */
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getComments()
    {
        return $this->em->getRepository(Comments::class)->findAll();
    }

    public function getComment($id)
    {
        return $this->em->getRepository(Comments::class)->find($id);
    }
}