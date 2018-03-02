<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Episode;
use AppBundle\Entity\Serie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $manager->flush();

    }
}