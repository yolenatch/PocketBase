<?php
/**
 * Tests for PocketBase
 */

use PHPUnit\Framework\TestCase;
use Pocketbase\Pocketbase;

class PocketbaseTest extends TestCase {
    private Pocketbase $instance;

    protected function setUp(): void {
        $this->instance = new Pocketbase(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pocketbase::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
