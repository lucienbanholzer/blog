<?php
/**
 * Created by PhpStorm.
 * User: lucien.banholzer
 * Date: 18/07/2018
 * Time: 14:21
 */

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
 * @Route("/", name="blog")
 */
    public function blog()
    {
        $posts = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findAll();

        return $this->render('blog.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @Route("/blog/{id}", name="post")
     */
    public function post($id)
    {
        $post = $this->getDoctrine()
            ->getRepository(Post::class)
            ->find($id);


        return $this->render('post.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * @Route("/infos", name="infos")
     */
    public function infos()
    {
        return $this->render('infos.html.twig', []);
    }
}