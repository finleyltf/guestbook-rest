<?php

namespace PostRest;

return array(
    'controllers' => array(
        'invokables' => array(
            'PostRest\Controller\PostRest' => 'PostRest\Controller\PostRestController',
        ),
    ),

    // The following section is new` and should be added to your file
    'router' => array(
        'routes' => array(
            'post-rest' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/post-rest[/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'PostRest\Controller\PostRest',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),



);