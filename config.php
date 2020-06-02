<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000/',
    'collections' => [
        'posts' => [
            'path' => 'blog/{published_date|Y-m}/{filename}',
            'author' => 'VizuaaLOG (Tom)'
        ]
    ],
    'versions' => [
        'master',
        '0.11',
        '0.10',
    ],
    'github_issues_url' => 'https://github.com/VizuaaLOG/BulmaJS/issues',
    'released_version' => '0.11.0',
    'documentation_version' => '0.11',
    'is' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'is-active' : '';
    },
];
