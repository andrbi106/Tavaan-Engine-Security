<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Security Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور security — همهٔ کلیدهای مستندشده در `docs/03-engines/security.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/security.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('SECURITY_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('SECURITY_PREFIX', 'security:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('SECURITY_LOG_CHANNEL', 'security'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Security',
        'accessor' => 'security',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];