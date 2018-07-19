<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class User extends Fixture
{
    public function load(ObjectManager $manager)
    {

        /*$user = new \App\Application\Sonata\UserBundle\Entity\User();
        $user->setToken("token");
        $user->setPassword("test");
        $user->setEmail("banholzer.lucien@gmail.com");
        $user->setUsername("lucienban");
        $user->setEnabled(true);
        $manager->persist($user);

        $user = new \App\Application\Sonata\UserBundle\Entity\User();
        $user->setToken("token");
        $user->setPassword("test");
        $user->setEmail("marion.baumgart@hotmail.fr");
        $user->setUsername("marionbaum");
        $user->setEnabled(true);
        $manager->persist($user);

        $manager->flush();*/
    }
}
