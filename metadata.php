<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'           => 'rs-exception',
    'title'        => '*RS Exceptions',
    'description'  => 'Displays the exeptionlog in the backend of your shop.',
    'thumbnail'    => '',
    'version'      => '1.0',
    'author'       => '',
    'url'          => '',
    'email'        => '',
    'controllers' => array(
        'rs_exception_main'      => rs\exception\Application\Controller\Admin\rs_exception_main::class,
    ),
    'templates'    => array(
        'rs_exception_main.tpl' => 'rs/exception/views/admin/tpl/rs_exception_main.tpl',
    ),
);