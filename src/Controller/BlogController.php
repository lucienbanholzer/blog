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
        /*$posts = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findLatest();*/

        $posts = array();

        return $this->render('blog.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @Route("/infos", name="infos")
     */
    public function infos()
    {
        /*$posts = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findLatest();*/

        $posts = array();

        return $this->render('infos.html.twig', [
            'posts' => $posts,
        ]);
    }
}