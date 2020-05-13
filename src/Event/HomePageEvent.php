<?php

namespace App\Event;

use Symfony\Contracts\EventDispatcher\Event;

class HomePageEvent extends Event
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}