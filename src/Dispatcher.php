<?php

namespace Msaami\Saei;

use Msaami\Saei\Listener;

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
	 * @param string $event
	 * @param Listener $listener
	 */
	public function addListener(string $event , Listener $listener)
	{
		return $this->listeners[$event][] = $listener;
	}



	/**
	 * get all listeners related to event
	 *
	 * @param string $event
	 * @return array 
	 */
	public function getListenersByEvent(string $event)
	{
		return $this->hasListener($event) 
			? $this->listeners[$event]	
			: [];
	}


	/**
	 * checks event has listener 
	 *
	 * @param string $event
	 */
	public function hasListener(string $event)
	{
		return isset($this->listeners[$event]);
	}


	/**
	 * dispatch listeners related to event
	 *
	 * @param Event $event
	 */
	public function dispatch(Event $event)
	{
		foreach($this->getListenersByEvent($event->getName()) as $listener){
			$listener->handle($event);
		}
	}



}
