<?php

return [
    'production' => false,
    'baseUrl' => 'https://drkolls.com',
    'site' => [
        'title' => 'Dr.Koll\'s',
        'description' => 'Dr.Koll\'s',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Dr.Koll\'s',
    ],
    'links' => [
        'twitter' => 'https://twitter.com/johndoe',
        'github' => 'https://github.com/johndoe',
    ],
    'services' => [
        'cmsVersion' => '~2.10',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'artisanstatic',
            'apiKey' => '365895137117119',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
