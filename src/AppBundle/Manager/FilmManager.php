<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Film;
use Doctrine\ORM\EntityManagerInterface;

class FilmManager
{
    /** @var EntityManagerInterface */
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getFilms()
    {
        return $this->em->getRepository(Film::class)->findAll();
    }

    public function getFilm(int $id)
    {
        return $this->em->getRepository(Film::class)->find($id);
    }
}