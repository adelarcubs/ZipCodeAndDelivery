<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'ZipCodeAndDelivery\Controller\ZipCode' => 'ZipCodeAndDelivery\Controller\ZipCodeController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'ZipCodeAndDelivery' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/ZipCodeAndDelivery/zipcode[/:id]',
                    'defaults' => array(
                        'controller' => 'ZipCodeAndDelivery\Controller\ZipCode',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
        'template_path_stack' => array(
            'ZipCodeAndDelivery' => __DIR__ . '/../view',
        ),
    ),
);
