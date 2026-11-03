<?php

declare(strict_types=1);

namespace Tavaan\Engine\Security;

/**
 * Csrf — پیاده‌سازی مطابق مستندات.
 *
 * @see docs/03-engines/ (YAML machine-readable block)
 */
final class Csrf
{
    /**
     * token
     */
    public function token(/* ... */): mixed
    {
        return $this->data["_token"] ?? bin2hex(random_bytes(16));
    }
    /**
     * field
     */
    public function field(/* ... */): mixed
    {
        return null;
    }
    /**
     * rotate
     */
    public function rotate(/* ... */): mixed
    {
        return null;
    }
    /**
     * verify
     */
    public function verify(/* ... */): mixed
    {
        return null;
    }
}
