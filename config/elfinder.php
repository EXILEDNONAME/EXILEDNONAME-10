<?php

return array(

  'dir' => ['storage'],
  'disks' => ['storage'],

  'route' => [
    'prefix' => 'dashboard/files',
    'middleware' => array('web', 'auth'),
    ],
    'access' => 'Barryvdh\Elfinder\Elfinder::checkAccess',
    'roots' => null,
    'options' => array(),
    'root_options' => array(

    ),

  );
