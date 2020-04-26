<?php

return [
    'web' => [
        'home' => [
            'pagetitle' => 'Главная',
            'longtitle' => '',
            'template' => 1,
            'alias' => 'index',
            'hidemenu' => true,
            'richtext' => 1,
        ],
        'contacts' => [
            'pagetitle' => 'Контакты',
            'longtitle' => '',
            'template' => 1,
            'alias' => 'contacts',
            'hidemenu' => false,
            'richtext' => 1,
        ],
        // 'base-of-blocks' => [
        //     'pagetitle' => 'Base of blocks',
        //     'longtitle' => '',
        //     'template' => 1,
        //     'alias' => 'base-of-blocks',
        //     'hidemenu' => true,
        //     'richtext' => 0,
        //     'published' => 0,
        //     'show_in_tree' => 0,
        // ],
        'service' => [
            'pagetitle' => 'Служебные',
            'template' => 0,
            'hidemenu' => true,
            'published' => false,
            'alias_visible' => false,
            'resources' => [
                '403' => [
                    'pagetitle' => '403',
                    'longtitle' => 'Доступ запрещен',
                    'template' => 2,
                    'hidemenu' => true,
                    'uri' => '403.html',
                    'uri_override' => true,
                    'richtext' => 1,
                ],
                '404' => [
                    'pagetitle' => '404',
                    'longtitle' => '404 error | Страница не найдена',
                    'template' => 2,
                    'hidemenu' => true,
                    'uri' => '404.html',
                    'uri_override' => true,
                    'richtext' => 1,
                ],
                '503' => [
                    'pagetitle' => '503',
                    'longtitle' => 'Сайт недоступен',
                    'template' => 2,
                    'hidemenu' => true,
                    'uri' => '503.html',
                    'uri_override' => true,
                    'richtext' => 1,
                ],
                'sitemap_html' => [
                    'pagetitle' => 'Карта сайта',
                    'alias' => 'sitemap.html',
                    'template' => 2,
                    'hidemenu' => true,
                    'uri' => 'sitemap.html',
                    'uri_override' => true,
                ],
                'sitemap_xml' => [
                    'pagetitle' => 'SiteMap',
                    'alias' => 'sitemap.xml',
                    'template' => '',
                    'hidemenu' => true,
                    'uri' => 'sitemap.xml',
                    'uri_override' => true,
                    'content_type' => 2,
                ],
                'policy' => [
                    'pagetitle' => 'Политика конфиденциальности',
                    'longtitle' => '',
                    'template' => 1,
                    'alias' => 'policy',
                    'hidemenu' => true,
                    'richtext' => 1,
                ],
            ],
        ],
    ],
];