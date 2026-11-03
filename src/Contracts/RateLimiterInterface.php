<?php

declare(strict_types=1);

namespace Tavaan\Engine\Security\Contracts;

/**
 * قرارداد RateLimiter.
 *
 * @see \Tavaan\Engine\Security\RateLimiter
 * @api 1.0
 */
interface RateLimiterInterface
{
    /**
     * متد attempt.
     *
     * @return mixed
     */
    public function attempt(/* ... */): mixed;

    /**
     * متد tooManyAttempts.
     *
     * @return mixed
     */
    public function tooManyAttempts(/* ... */): mixed;

    /**
     * متد hit.
     *
     * @return mixed
     */
    public function hit(/* ... */): mixed;

    /**
     * متد remaining.
     *
     * @return mixed
     */
    public function remaining(/* ... */): mixed;

    /**
     * متد clear.
     *
     * @return mixed
     */
    public function clear(/* ... */): mixed;

    /**
     * متد availableIn.
     *
     * @return mixed
     */
    public function availableIn(/* ... */): mixed;
}