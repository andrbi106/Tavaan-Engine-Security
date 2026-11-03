<?php

declare(strict_types=1);

namespace Tavaan\Engine\Security\Contracts;

/**
 * قرارداد Security.
 *
 * @see \Tavaan\Engine\Security\Security
 * @api 1.0
 */
interface SecurityInterface
{
    /**
     * متد sanitize.
     *
     * @return mixed
     */
    public function sanitize(/* ... */): mixed;

    /**
     * متد sign.
     *
     * @return mixed
     */
    public function sign(/* ... */): mixed;

    /**
     * متد validateSignature.
     *
     * @return mixed
     */
    public function validateSignature(/* ... */): mixed;

    /**
     * متد normalize.
     *
     * @return mixed
     */
    public function normalize(/* ... */): mixed;

    /**
     * متد ssrfCheck.
     *
     * @return mixed
     */
    public function ssrfCheck(/* ... */): mixed;
}