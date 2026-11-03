<?php

declare(strict_types=1);

namespace Tavaan\Engine\Security\Contracts;

/**
 * قرارداد Csrf.
 *
 * @see \Tavaan\Engine\Security\Csrf
 * @api 1.0
 */
interface CsrfInterface
{
    /**
     * متد token.
     *
     * @return mixed
     */
    public function token(/* ... */): mixed;

    /**
     * متد field.
     *
     * @return mixed
     */
    public function field(/* ... */): mixed;

    /**
     * متد rotate.
     *
     * @return mixed
     */
    public function rotate(/* ... */): mixed;

    /**
     * متد verify.
     *
     * @return mixed
     */
    public function verify(/* ... */): mixed;
}