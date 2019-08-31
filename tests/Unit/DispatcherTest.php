<?php

namespace Saei\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Msaami\Saei\Dispatcher;
use Saei\Stubs\ListenerStub;
use Saei\Stubs\EventStub;

class DispatcherTest extends TestCase
{

	/**
	 * return dispatcher object
	 *
	 * @return Dispatcher
	 */
	private function getDispatcher()
	{
		return new Dispatcher();
	}



	/** @test */
	public function it_holds_listeners_to_an_array()
	{
		$dispatcher = $this->getDispatcher();

		$this->assertEmpty($dispatcher->getListeners());

		$this->assertIsArray($dispatcher->getListeners());

	}


	/** @test */
	public function it_can_add_listener()
	{
		$dispatcher = $this->getDispatcher();

		$dispatcher->addListener('OrderRegistered' , new ListenerStub());

		$this->assertCount(1 , $dispatcher->getListeners()['OrderRegistered']);
		
	}


	/** @test */
	public function it_gives_listener_by_event()
	{
		$dispatcher = $this->getDispatcher();

		$dispatcher->addListener('OrderRegistered' , new ListenerStub());

		$this->assertCount(1 , $dispatcher->getListenersByEvent('OrderRegistered'));
	}


	/** @test */
	public function checks_event_has_listener()
	{
		$dispatcher = $this->getDispatcher();

		$dispatcher->addListener('OrderRegistered' , new ListenerStub());

		$this->assertTrue($dispatcher->hasListener('OrderRegistered'));
	}


	/** @test */
	public function checks_event_does_not_have_listener()
	{
		$dispatcher = $this->getDispatcher();
		
		$this->assertFalse($dispatcher->hasListener('OrderRegistered'));
	}


	/** @test */
	public function it_return_empty_array_when_no_listeners_for_event()
	{
		$dispatcher = $this->getDispatcher();

		$this->assertCount(0 , $dispatcher->getListenersByEvent('OrderRegistered'));
	}


}

