<?php

return [
    'name'        => 'Mosaico Builder Plugin',
    'description' => 'Mosaico email builder plugin for mautic',
    'version'     => '1.0',
    'author'      => 'bmbove',
    'type'        => 'builder',
    'routes'      => [
        'public' => [
            'mautic_plugin_mosaico_builder' => [
                'path'       => '/mosaico/builder',
                'controller' => 'MauticMosaicoBundle:Public:builder',
            ],
        ],
    ],
];
