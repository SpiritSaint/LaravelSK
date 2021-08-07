<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ScheduleTest extends TestCase
{
    /**
     * @return void
     */
    public function test_schedule_run()
    {
        $this->artisan('schedule:run')->assertExitCode(0);
    }
}
