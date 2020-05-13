<?php

namespace App\Listener;

use App\Event\HomePageEvent;

class HomePageListener
{
    public function onHomePageVisit(HomePageEvent $event)
    {
        dd('Hello ' . $event->name);
    }
}