<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;

class CategoryManager
{
    /** @var EntityManagerInterface */
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getCategories()
    {
        return $this->em->getRepository(Category::class)->findAll();
    }

    public function getCategory($id)
    {
        return $this->em->getRepository(Category::class)->find($id);
    }

    public function getFilmsByCategories($category) {

        return $this->em->getRepository(Category::class)->getFilmsByCategory($category);
    }
}