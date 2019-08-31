<?php
namespace Saei\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Saei\Stubs\EventStub;
use Saei\Stubs\EventStubNoName;
use Msaami\Saei\Dispatcher;


class EventTest extends TestCase
{
	/** @test */
	public function can_get_event_name()
	{
		$event = new EventStub();

		$this->assertEquals('OrderRegistered' , $event->getName());
	}


	/** @test */
	public function it_defatuls_to_an_event_name_of_the_class_name()
	{
		$event = new EventStubNoName();
		$this->assertEquals('EventStubNoName' , $event->getName());
	}


	

}
