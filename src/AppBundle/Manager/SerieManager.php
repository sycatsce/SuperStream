<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Serie;
use Doctrine\ORM\EntityManagerInterface;

class SerieManager
{
    /** @var EntityManagerInterface */
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getSeries()
    {
        return $this->em->getRepository(Serie::class)->findAll();
    }

    public function getSerie(int $id)
    {
        return $this->em->getRepository(Serie::class)->find($id);
    }
}