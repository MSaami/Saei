<?php

namespace Msaami\Saei;

use ReflectionClass;

abstract class Event
{

	/**
	 * get event name
	 *
	 */
	public function getName()
	{
		return (new ReflectionClass($this))->getShortName();
	}

}

