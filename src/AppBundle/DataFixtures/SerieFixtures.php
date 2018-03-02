<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Serie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SerieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $casadepapel = new Serie();
        $casadepapel->setName('LA CASA DE PAPEL');
        $casadepapel->setDuration('70min');
        $casadepapel->setReleaseDate( new \DateTime("2017-05-02"));
        $casadepapel->setDescription('Huit voleurs font une prise d\'otages dans la Maison royale de la Monnaie d\'Espagne, tandis qu\'un génie du crime manipule la police pour mettre son plan à exécution.');
        $casadepapel->setImage('8b77d331e5f6666f4e0650308721071e.png');

        $manager->persist($casadepapel);
        $manager->flush();

    }
}