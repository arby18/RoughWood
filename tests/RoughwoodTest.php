<?php
/**
 * Tests for RoughWood
 */

use PHPUnit\Framework\TestCase;
use Roughwood\Roughwood;

class RoughwoodTest extends TestCase {
    private Roughwood $instance;

    protected function setUp(): void {
        $this->instance = new Roughwood(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roughwood::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
