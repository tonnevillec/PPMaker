<?php
namespace PPMaker\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PPMaker\UserBundle\Entity\User;

class LoadUser implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $name = 'tonnevillec';

        $user = new User;
        $user->setUsername($name);
        $user->setPassword($name);
        $user->setSalt('');
        $user->setRoles(array('ROLE_ADMIN'));

        $manager->persist($user);
        $manager->flush();
    }
}