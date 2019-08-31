<?php

namespace App\Core\Events;
use ReflectionClass;

abstract class Event
{
	public function getName()
	{
		return (new ReflectionClass($this))->getShortName();
	}

}

