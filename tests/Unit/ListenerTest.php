<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use TypeError;
use Saei\Stubs\ListenerStub;
use Saei\Stubs\EventStub;

class ListenerTest extends TestCase
{

	/** @test */
	public function handle_method_throws_excpetion_if_invalid_event_given()
	{
		$this->expectException(TypeError::class);

		$listener = new ListenerStub();

		$listener->handle('a new event');
	}

	/** @test */
	public function handle_method_accepts_an_event()
	{
		$listener = new ListenerStub();

		$listener->handle(new EventStub());
		
		$this->addToAssertionCount(1);

	}

}
