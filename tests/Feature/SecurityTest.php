<?php

declare(strict_types=1);

namespace Tavaan\Engine\Security\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Security\Security;
use Tavaan\Engine\Security\SecurityServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Security.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class SecurityTest extends TestCase
{
    private Security $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Security($config);
    }

    /**
     * T-01: CSRF: بدون توکن → 419
     */
    public function test_t01_csrf____419(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: CSRF: توکن درست → پاس
     */
    public function test_t02_csrf____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: RateLimit: ۶۱ درخواست → 429 + Retry-After
     */
    public function test_t03_rate_limit____429__ret(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: Sliding window دقت
     */
    public function test_t04_sliding_window_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: Sanitizer: `onerror=`, `javascript:` حذف
     */
    public function test_t05_sanitizer_onerror_javascript_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: SSRF: `169.254.169.254` → رد
     */
    public function test_t06_ssrf_169254169254__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: SSRF: DNS rebinding
     */
    public function test_t07_ssrf_dns_rebinding(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: Security headers همه حاضر
     */
    public function test_t08_security_headers__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-09: Signature با expires منقضی → رد
     */
    public function test_t09_signature__expires___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-09 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-09 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-10: Normalizer: zero-width/bidi حذف
     */
    public function test_t10_normalizer_zerowidthbidi_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-10 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-10 هنوز پیاده‌سازی نشده است.');
    }

}