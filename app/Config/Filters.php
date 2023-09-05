<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'filteradmin'   => \App\Filters\FilterAdmin::class,
        'filteruser'    => \App\Filters\FilterUser::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     */
    public array $globals = [
        'before' => [
            'filteradmin' => [
                'except' => [
                    '/',
                    '/auth',
                    '/auth/*',
                    '/payment/pay',
                    '/product/*',
                    '/about',
                ]
            ],
        ],
        'after' => [
            'filteradmin' => [
                'except' => [
                    '/admin',
                    '/produk',
                    '/produk/*',
                    '/paketreseller',
                    '/paketreseller/*',
                    '/pesanan',
                    '/pesanan/*',
                    '/laporan',
                    '/laporan/*',
                ]
            ],
            'filteruser' => [
                'except' => [
                    '/',
                    '/',
                    '/product/*',
                    '/product/*',
                    '/cart',
                    '/cart/*',
                    '/checkout',
                    '/checkout/*',
                    '/payment',
                    '/payment/*',
                    '/cekongkir',
                    '/cekongkir/*',
                    '/order',
                    '/order/*',
                    '/order',
                    '/order/*',
                    '/auth/edit_alamat',
                    '/auth/getKota',
                    '/about',
                ]
            ],
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don’t expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [];
}
