<?php
namespace App\Tests\Unit;
use PHPUnit\Framework\TestCase;
use App\Tests\Stubs\EventStub;


class EventTest extends TestCase
{
	/** @test */
	public function can_get_event_name()
	{
		$event = new EventStub();
		$this->assertEquals('EventStub' , $event->getName());
	}


	

}
