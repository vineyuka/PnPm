<?php
/**
 * Tests for PnPmWorkspaces
 */

use PHPUnit\Framework\TestCase;
use Pnpmworkspaces\Pnpmworkspaces;

class PnpmworkspacesTest extends TestCase {
    private Pnpmworkspaces $instance;

    protected function setUp(): void {
        $this->instance = new Pnpmworkspaces(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pnpmworkspaces::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
