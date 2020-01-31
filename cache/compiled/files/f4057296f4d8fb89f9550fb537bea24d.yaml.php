<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/shreyasdeshpande/grav-admin/user/config/site.yaml',
    'modified' => 1580283706,
    'data' => [
        'title' => 'Shreyas',
        'default_lang' => 'English',
        'author' => [
            'name' => 'Shreyas Deshpande',
            'email' => 'shreydeshpande@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
