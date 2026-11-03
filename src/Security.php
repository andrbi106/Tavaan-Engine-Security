<?php

declare(strict_types=1);

namespace Tavaan\Engine\Security;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Security — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Security\Contracts\SecurityInterface
 */
final class Security implements Contracts\SecurityInterface
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
    public function sanitize(/* ... */): mixed
    {
        // TODO: پیاده‌سازی sanitize مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function sign(/* ... */): mixed
    {
        // TODO: پیاده‌سازی sign مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function validateSignature(/* ... */): mixed
    {
        // TODO: پیاده‌سازی validateSignature مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize(/* ... */): mixed
    {
        // TODO: پیاده‌سازی normalize مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function ssrfCheck(/* ... */): mixed
    {
        // TODO: پیاده‌سازی ssrfCheck مطابق مستندات (سند §3 API).
        return null;
    }
}