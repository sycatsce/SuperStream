<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $categories = [
            'Action',
            'Drame',
            'Aventure',
            'Animation',
            'Comédie',
            'Epouvante',
            'Science Fiction',
            'Policier',
            'Musical',
            'Animation Japonaise'
        ];
        foreach ($categories as $category){
           $categoryObj = new Category();
           $categoryObj->setName($category);
           $manager->persist($categoryObj); 
        }
        $manager->flush();

    }
}