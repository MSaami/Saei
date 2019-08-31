<?php

namespace App\Core\Events;

use App\Core\Events\Listener;

class Dispatcher
{
	/**
	 * holds all listeners with related event
	 *
	 * @var array
	 */
	private $listeners = [];



	/**
	 * return all listeners
	 *
	 * @return array
	 */
	public function getListeners()
	{
		return $this->listeners;
	}


	/**
	 * add listener for spectific event
	 *
	 * @param string $name
	 * @param Listener $listener
	 */
	public function addListener(string $name , Listener $listener)
	{
		return $this->listeners[$name][] = $listener;
	}




}
