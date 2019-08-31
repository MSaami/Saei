<?php

namespace App\Core\Events;

use App\Core\Events\Event;


abstract class Listener
{
	abstract public function handle(Event $event);
}

