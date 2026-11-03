<?php

declare(strict_types=1);

namespace Tavaan\Engine\Security\Tests\Feature;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Security\CsrfToken;
use Tavaan\Engine\Security\RateLimiter;

/**
 * Feature tests for the security engine.
 */
final class SecurityFeatureTest extends TestCase
{
    public function test_csrf_token_generate_returns_string(): void
    {
$csrf = new CsrfToken();
        $tok = $csrf->generate();
        $this->assertNotEmpty($tok);
    }

    public function test_csrf_token_verify_correct(): void
    {
$csrf = new CsrfToken();
        $tok = $csrf->generate();
        $this->assertTrue($csrf->verify($tok));
    }

    public function test_csrf_token_verify_wrong_returns_false(): void
    {
$csrf = new CsrfToken();
        $csrf->generate();
        $this->assertFalse($csrf->verify("wrong-token"));
    }

    public function test_rate_limiter_allows_under_limit(): void
    {
$rl = new RateLimiter();
        for ($i = 0; $i < 5; $i++) {
            $this->assertTrue($rl->hit("test", 10));
        }
    }

    public function test_rate_limiter_blocks_over_limit(): void
    {
$rl = new RateLimiter();
        for ($i = 0; $i < 10; $i++) { $rl->hit("k", 10); }
        $this->assertFalse($rl->hit("k", 10));
    }

    public function test_rate_limiter_resets_after_clear(): void
    {
$rl = new RateLimiter();
        for ($i = 0; $i < 10; $i++) { $rl->hit("k", 10); }
        $rl->clear("k");
        $this->assertTrue($rl->hit("k", 10));
    }
}
