<?php

namespace Msaami\Saei;

use Msaami\Saei\Event;


abstract class Listener
{
	abstract public function handle(Event $event);
}

