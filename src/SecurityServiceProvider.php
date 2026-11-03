<?php

declare(strict_types=1);

namespace Tavaan\Engine\Security;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Security\Contracts\SecurityInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * SecurityServiceProvider — ثبت سرویس‌های موتور Security.
 */
final class SecurityServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(SecurityInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Security($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('security', $this->app->get(SecurityInterface::class));

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            SecurityInterface::class,
            'security',
        ];
    }
}