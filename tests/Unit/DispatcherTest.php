<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Core\Events\Dispatcher;
use App\Tests\Stubs\ListenerStub;
use App\Tests\Stubs\EventStub;

class DispatcherTest extends TestCase
{
	/** @test */
	public function it_holds_listeners_to_an_array()
	{
		$dispatcher = new Dispatcher();

		$this->assertEmpty($dispatcher->getListeners());

		$this->assertIsArray($dispatcher->getListeners());

	}


	/** @test */
	public function it_can_add_listener()
	{
		$dispatcher = new Dispatcher();

		$dispatcher->addListener('OrderRegistered' , new ListenerStub());

		$this->assertCount(1 , $dispatcher->getListeners()['OrderRegistered']);
		
	}
}

