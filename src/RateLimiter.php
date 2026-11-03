<?php

declare(strict_types=1);

namespace Tavaan\Engine\Security;

/**
 * RateLimiter — پیاده‌سازی مطابق مستندات.
 *
 * @see docs/03-engines/ (YAML machine-readable block)
 */
final class RateLimiter
{
    /**
     * attempt
     */
    public function attempt(array $credentials): self
    {
        return false;
    }
    /**
     * tooManyAttempts
     */
    public function tooManyAttempts()
    {
        return null;
    }
    /**
     * hit
     */
    public function hit()
    {
        return null;
    }
    /**
     * remaining
     */
    public function remaining()
    {
        return null;
    }
    /**
     * clear
     */
    public function clear(): self
    {
        return $this;
    }
    /**
     * availableIn
     */
    public function availableIn()
    {
        return null;
    }
}
