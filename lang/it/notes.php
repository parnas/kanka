<?php

return [
    'create'        => [
        'title' => 'Nuova Nota',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'description'   => 'Descrizione',
        'image'         => 'Immagine',
        'is_pinned'     => 'Fissata',
        'name'          => 'Nome',
        'note'          => 'Nota sovraordinata',
        'notes'         => 'Sottonote',
        'type'          => 'Tipo',
    ],
    'helpers'       => [
        'nested_without'    => 'Visualizzazione delle note che non hanno una nota sovraordinata. Clicca su una fila per vedere le sottonote.',
    ],
    'hints'         => [
        'is_pinned' => 'Fino a 3 note possono essere fissate per essere visualizzate nella dashboard.',
    ],
    'index'         => [
        'title' => 'Note',
    ],
    'placeholders'  => [
        'name'  => 'Nome della nota',
        'note'  => 'Scegli una nota sovraordinata',
        'type'  => 'Religione, Razza, Systema Politico',
    ],
    'show'          => [],
];