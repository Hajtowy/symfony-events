<?php

namespace App\Listener;

use App\Entity\Post;
use Doctrine\ORM\Event\LifecycleEventArgs;

class AddPrefixToPostListener
{
    public function postUpdate(Post $post, LifecycleEventArgs $event)
    {
        dd('STOP ZMIANA');
    }
}