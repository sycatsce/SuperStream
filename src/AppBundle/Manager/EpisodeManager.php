<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Episode;
use Doctrine\ORM\EntityManagerInterface;

class EpisodeManager
{
    /** @var EntityManagerInterface */
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getEpisodes()
    {
        return $this->em->getRepository(Episode::class)->findAll();
    }

    public function getEpisode($id)
    {
        return $this->em->getRepository(Episode::class)->find($id);
    }
}