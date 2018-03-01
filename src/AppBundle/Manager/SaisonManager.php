<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Saison;
use Doctrine\ORM\EntityManagerInterface;

class SaisonManager
{
    /** @var EntityManagerInterface */
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getSaisons()
    {
        return $this->em->getRepository(Saison::class)->findAll();
    }

    public function getSaison($id)
    {
        return $this->em->getRepository(Saison::class)->find($id);
    }
}