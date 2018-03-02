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

        $dbz = new Serie();
        $dbz->setName('DRAGON BALL Z');
        $dbz->setDuration('20min');
        $dbz->setReleaseDate( new \DateTime("1989-04-26"));
        $dbz->setDescription("Dragon Ball Z se déroule cinq ans après le mariage de Son Goku et de Chichi, désormais parents de Son Gohan2. Raditz, un mystérieux guerrier extraterrestre, frère de Son Goku, arrive sur Terre pour retrouver Goku. Ce dernier apprend qu'il vient d'une planète de guerriers redoutables dont il ne reste plus que quatre survivants.");
        $dbz->setImage('Dragon_Ball_Z.png');
        $manager->persist($dbz);

        $manager->flush();

    }
}