<?php

return array(
    'template' => array(
        'Route_Admin'              => array(
            'resource' => 'template/Admin/Route.php',
            'target'   => 'Routes/Web',
            'needDir'  => true,
        ),
        'Route_Api'              => array(
            'resource' => 'template/Api/Route.php',
            'target'   => 'Routes/Api',
            'needDir'  => true,
        ),
        'Request_Admin'            => array(
            'resource' => 'template/Admin/Request.php',
            'target'   => 'app/Http/Admin/Requests/',
            'needDir'  => true,
        ),
        'Request_Api'            => array(
            'resource' => 'template/Api/Request.php',
            'target'   => 'app/Http/Api/Requests/',
            'needDir'  => true,
        ),
        'Controller_Admin'         => array(
            'resource'  => 'template/Admin/Controller.php',
            'target'    => 'app/Http/Controllers/Admin/',
            'namespace' => 'App/',
            'needDir'   => false,
        ),
        'Controller_Api'         => array(
            'resource'  => 'template/Api/Controller.php',
            'target'    => 'app/Http/Controllers/Api/',
            'namespace' => 'App/',
            'needDir'   => false,
        ),
        'Service'         => array(
            'resource'  => 'template/Services.php',
            'target'    => 'app/Services/',
            'needDir'   => true,
        ),
        'Resources_Index'         => array(
            'resource'  => 'template/Admin/Index.php',
            'target'    => 'resources/views/admin/',
            'needDir'   => true,
        ),
        'Resources_Create'         => array(
            'resource'  => 'template/Admin/Create.php',
            'target'    => 'resources/views/admin/',
            'needDir'   => true,
        ),
        'Resources_Edit'         => array(
            'resource'  => 'template/Admin/Edit.php',
            'target'    => 'resources/views/admin/',
            'needDir'   => true,
        ),
    ),
    'using_repository' => false,
);