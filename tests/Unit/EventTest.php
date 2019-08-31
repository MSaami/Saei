<?php
namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\EventStubNoName;
use App\Core\Events\Dispatcher;


class EventTest extends TestCase
{
	/** @test */
	public function can_get_event_name()
	{
		$event = new EventStub();
		$this->assertEquals('OrderRegistered' , $event->getName());
		//$disptacher = new Dispatcher();

		//$this->assertEmpty($dispatcher->getListeners());

		//$this->assertInternalTypes('array' , $disptacher->getListeners());
	}


	/** @test */
	public function it_defatuls_to_an_event_name_of_the_class_name()
	{
		$event = new EventStubNoName();
		$this->assertEquals('EventStubNoName' , $event->getName());
	}


	

}
