<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setFirstname('admin');
        $admin->setLastname('admin');
        $admin->setMail('admin@admin.fr');

        $dt = new \DateTime();
        $dt->format('Y-m-d H:i:s');
        $admin->setCreatedAt( $dt );
        $admin->setPassword('admin');
        $admin->setIsAdmin(1);

        $manager->persist($admin);
        $manager->flush();

    }
}