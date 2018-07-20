<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PracticalInfos extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $infos = new \App\Entity\PracticalInfos();
        $infos->setContent("test");
        $infos->setIntro("test");
        $infos->setTitle("test  1");
        $infos->setDate(new \DateTime());
        $manager->persist($infos);

        $infos = new \App\Entity\PracticalInfos();
        $infos->setContent("test");
        $infos->setIntro("test");
        $infos->setTitle("test  2");
        $infos->setDate(new \DateTime());
        $manager->persist($infos);

        $manager->flush();
    }
}
