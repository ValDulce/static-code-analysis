<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationController;
use PHPUnit\Framework\TestCase;

class OperationControllerTest extends TestCase
{
    public function test_addition_result(): void
    {
        $controller = new OperationController;

        $result = $controller->addition(4, 9);

        $this->assertIsInt($result);

        $this->assertNotNull($result);

        $this->assertEquals(13, $result);
    }
}
