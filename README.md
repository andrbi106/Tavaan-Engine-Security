# Tavaan Engine — Security

> **امنیت عرضی (CSRF/RateLimit/Sanitizer/SSRF)** — موتور Security در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.security` |
| نام | `Security` |
| عنوان فارسی | امنیت عرضی (CSRF/RateLimit/Sanitizer/SSRF) |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Security` |
| نوع | `engine` |
| Facade | `Security` (accessor: `security`) |

## توضیحات

M4 — CSRF (double-submit)، RateLimit (sliding/fixed/token-bucket)، Security Headers، HTML Sanitizer خالص (allowlist)، SSRF Guard با DNS pinning، Input Normalizer، Signature.

## خطاها (Exceptions)

- `Tavaan\Engine\Security\Exceptions\SsrfException`

## Facadeها

- `Tavaan\Engine\Security\Facades\Security`

## کلاس‌های اصلی

- `src/Csrf.php`
- `src/Csrf/CsrfManager.php`
- `src/Middleware/CsrfVerifyMiddleware.php`
- `src/Middleware/ThrottleMiddleware.php`
- `src/Normalize/InputNormalizer.php`
- `src/RateLimiter.php`
- `src/Sanitize/HtmlSanitizer.php`
- `src/Security.php`
- `src/security.php`

## Service Providerها

- `Tavaan\Engine\Security\SecurityServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `http`
- `crypt`
- `cache`
- `config`

**موتورهای اختیاری:**

- `session`
- `router`

## پیکربندی

- فایل پیکربندی: `config/security.php`
- کلید: `security`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Security.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Security`** (این مخزن) | موتور Security |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
