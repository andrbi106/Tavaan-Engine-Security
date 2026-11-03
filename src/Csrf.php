<?php

declare(strict_types=1);

namespace Tavaan\Engine\Security;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Csrf — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Security\Contracts\CsrfInterface
 */
final class Csrf implements Contracts\CsrfInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function token(/* ... */): mixed
    {
        // TODO: پیاده‌سازی token مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function field(/* ... */): mixed
    {
        // TODO: پیاده‌سازی field مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function rotate(/* ... */): mixed
    {
        // TODO: پیاده‌سازی rotate مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function verify(/* ... */): mixed
    {
        // TODO: پیاده‌سازی verify مطابق مستندات (سند §3 API).
        return null;
    }
}