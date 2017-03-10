<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = [
    'id'           => 'of2_monoxid',
    'title'        => 'Monoxid Logger',
    'description'  => [
        'de' => 'Logging Modul',
        'en' => 'Module for Logging',
    ],
    'thumbnail'    => 'logo.jpg',
    'version'      => '0.0.1',
    'author'       => 'Keywan Ghadami',
    'url'          => 'https://github.com/keywan-ghadami-oxid/monoxid',
    'email'        => 'keywan.ghadami@oxid-esales.com',
    'extend'       => [
        'oxutilsobject'                    => 'of2/monoxid/core/of2_monoxidoxutilsobject',
        'oxviewconfig'                    => 'of2/monoxid/core/o2f_monoxidoxviewconfig',
    ],
    'files'        => [
         'Of2MonoxidLoggerFactory'          => 'of2/monoxid/core/Of2MonoxidLoggerFactory.php',
    ], 
    'events'       => [
      
    ],
    'blocks' => [
        
    ],
   'settings' => [
    ]
];
