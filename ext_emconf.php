<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Faceted Search',
    'description' => 'Faceted fulltext search for TYPO3. Fast, flexible and easy to install and use. Indexes content directly from the databases. Features faceting / filtering, file indexing, images in result lists and respects access restrictions.',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '3.0.6',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'ke_search Dev Team',
    'author_email' => 'christian.buelter@pluswerk.ag',
    'author_company' => 'Pluswerk AG',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'typo3' => '9.5.0-9.99.99'
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    'suggests' => array(),
    'autoload' => array(
        'psr-4' => array('TeaminmediasPluswerk\\KeSearch\\' => 'Classes'),
        'classmap' => array('Classes'),
    ),
);
