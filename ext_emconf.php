<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3api sample for news ext - tnum mod',
    'description' => '',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.3.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.999',
            'news' => '7.0.0-8.99.999',
            't3api' => '1.0.0-1.99.999',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
