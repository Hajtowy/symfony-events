<?php

namespace App\Controller;

use App\Entity\Post;
use App\Event\HomePageEvent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index(EventDispatcherInterface $dispatcher)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $post = $this->getDoctrine()
            ->getRepository(Post::class)
            ->find(1);

        $post->setName('zmiana');

        $entityManager->persist($post);
        $entityManager->flush();





//        $event = new HomePageEvent('Mirosław');
//        $dispatcher->dispatch($event);

        die;
        return new Response('response');
    }
}
