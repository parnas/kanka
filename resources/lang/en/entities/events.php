<?php

return [
    'fields'    => [
        'type'  => 'Event Type',
    ],
    'helpers'   => [
        'characters'    => 'Setting the type as either the date of birth or of death for this character will automatically calculate their age. :more.',
    ],
    'types'     => [
        'birth'     => 'Birth',
        'death'     => 'Death',
        'primary'   => 'Primary',
    ],
    'show' => [
        'title' => ':name Reminders',
        'actions' => [
            'add' => 'Add reminder',
        ]
    ],
];
