<?php

return array(
    'db' => array(
        'driver' => 'Pdo',
        'dsn'    => 'pgsql:livraria;host=localhost',
        'driver_options' => array(
            PDO::PGSQL_ATTR_DISABLE_NATIVE_PREPARED_STATEMENT => 'SET NAMES \'UTF8\''
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
        )
    )
    
);