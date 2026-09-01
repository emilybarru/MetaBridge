<?php
/**
 * Tests for MetaBridge
 */

use PHPUnit\Framework\TestCase;
use Metabridge\Metabridge;

class MetabridgeTest extends TestCase {
    private Metabridge $instance;

    protected function setUp(): void {
        $this->instance = new Metabridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Metabridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
