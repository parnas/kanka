<?php

return [
    'fields'    => [
        'type'  => 'Тип события',
    ],
    'helpers'   => [
        'characters'    => 'Если задать тип как дату рождения или смерти этого персонажа, то его возраст будет вычисляться автоматически. :more.',
        'no_events'     => 'На этой странице показаны все календари, с которыми этот объект связан напоминаниями.',
    ],
    'show'      => [
        'actions'   => [
            'add'   => 'Новое напоминание',
        ],
        'title'     => 'Напоминания объекта :name',
    ],
    'types'     => [
        'birth'     => 'Рождение',
        'death'     => 'Смерть',
        'primary'   => 'Основное',
    ],
];
