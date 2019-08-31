<?php

namespace Saei\Tests\Integration;

use PHPUnit\Framework\TestCase;
use Msaami\Saei\Dispatcher;
use Saei\Stubs\EventStub;
use Saei\Stubs\ListenerStub;

class EventsTest extends TestCase
{
	/** @test */
	public function it_can_dispatch_an_event()
	{
		$dispatcher = new Dispatcher();

		$event = new EventStub();

		$mockedListener = $this->createMock(ListenerStub::class);

		$mockedListener->expects($this->once())->method('handle')->with($event);

		$dispatcher->addListener('OrderRegistered' , $mockedListener);

		$dispatcher->dispatch($event);

	}



	/** @test */
	public function it_can_dispatch_an_event_with_multiple_listeners()
	{
		$dispatcher = new Dispatcher();

		$event = new EventStub();

		$mockedListener = $this->createMock(ListenerStub::class);
		$anotherMockedListener = $this->createMock(ListenerStub::class);

		$mockedListener->expects($this->once())->method('handle')->with($event);
		$anotherMockedListener->expects($this->once())->method('handle')->with($event);

		$dispatcher->addListener('OrderRegistered' , $mockedListener);
		$dispatcher->addListener('OrderRegistered' , $anotherMockedListener);

		$dispatcher->dispatch($event);

	}




}
