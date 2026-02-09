<?php
/**
 * Tests for IssueTrack
 */

use PHPUnit\Framework\TestCase;
use Issuetrack\Issuetrack;

class IssuetrackTest extends TestCase {
    private Issuetrack $instance;

    protected function setUp(): void {
        $this->instance = new Issuetrack(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Issuetrack::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
