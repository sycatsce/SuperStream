<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Film;
use AppBundle\Entity\Comments;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $film1 = new Film();
        $film1->setName('SUICIDE SQUAD');
        $film1->setDuration('2h 03min');
        $film1->setReleaseDate( new \DateTime("2016-08-03"));
        $film1->setDescription('C\'est tellement jouissif d\'être un salopard ! Face à une menace aussi énigmatique qu\'invincible, l\'agent secret Amanda Waller réunit une armada de crapules de la pire espèce. Armés jusqu\'aux dents par le gouvernement, ces Super-Méchants s\'embarquent alors pour une mission-suicide. Jusqu\'au moment où ils comprennent qu\'ils ont été sacrifiés. Vont-ils accepter leur sort ou se rebeller ?');
        $film1->setImage('<img class="img-responsive" class="affiche" id="suicidesquad" src="images/affiches/SUICIDE SQUAD.JPG" alt="">');
        
        $manager->persist($film1);
        $manager->flush();

    }
}