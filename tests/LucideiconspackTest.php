<?php
/**
 * Tests for LucideIconsPack
 */

use PHPUnit\Framework\TestCase;
use Lucideiconspack\Lucideiconspack;

class LucideiconspackTest extends TestCase {
    private Lucideiconspack $instance;

    protected function setUp(): void {
        $this->instance = new Lucideiconspack(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Lucideiconspack::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
