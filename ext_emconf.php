<?php

$EM_CONF['h5p_updates'] = [
    'title'            => 'H5p platform overrides',
    'description'      => 'Updates the various objects ao to use / where DIRECTORY_SEPARATOR is used. Ensure compatibility with all platforms',
    'category'         => 'fe',
    'author'           => 'Sjoerd Zonneveld',
    'author_company'   => 'Bitpatroon',
    'author_email'     => 'typo3@bitpatroon.nl',
    'clearCacheOnLoad' => 0,
    'dependencies'     => '',
    'state'            => 'stable',
    'uploadfolder'     => 0,
    'version'          => '0.0.1',
    'constraints'      => [
        'depends'      => [
            'typo3' => '7.0.0-9.5.99',
        ], 'conflicts' => [],
        'suggests'     => [],
    ],
    'autoload'         => [
        'psr-4' => ['BPN\\H5pUpdates\\' => 'Classes']
    ],
    'conflicts'        => '',
    'suggests'         => [],
];
