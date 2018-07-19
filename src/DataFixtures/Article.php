<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Article extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $article = new \App\Entity\Article();
        $article->setContent("test");
        $article->setIntro("test");
        $article->setTitle("test article 1");
        $manager->persist($article);

        $article = new \App\Entity\Article();
        $article->setContent("test");
        $article->setIntro("test");
        $article->setTitle("test article 2");
        $manager->persist($article);

        $manager->flush();
    }
}
