<?php

namespace App\Subscriber;

use App\Event\HomePageEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class HomePageSubscriber implements EventSubscriberInterface
{
    public function sayHello(HomePageEvent $event)
    {
        dump('Hello from subscriber ' . $event->name);
    }

    public function sayHelloAgain(HomePageEvent $event)
    {
        dump('Hello from subscriber again ' . $event->name);
    }

    public static function getSubscribedEvents()
    {
        return [
            HomePageEvent::class => [
                ['sayHello', 2],
                ['sayHelloAgain', 10],
            ],
        ];
    }
}