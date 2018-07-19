<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Post extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $post = new \App\Entity\Post();
        $post->setContent("test");
        $post->setIntro("test");
        $post->setTitle("test post 1");
        $post->setSubtitle("test subtitle post 2");
        $post->setUrl("tets url");
        $manager->persist($post);

        $post = new \App\Entity\Post();
        $post->setContent("test");
        $post->setIntro("test");
        $post->setTitle("test post 2");
        $post->setSubtitle("test subtitle post 2");
        $post->setUrl("tets url");
        $manager->persist($post);

        $manager->flush();
    }
}
