<?php

return [
    'create'        => [
        'title' => 'Nuovo Oggetto',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'character' => 'Personaggio',
        'image'     => 'Immagine',
        'location'  => 'Luogo',
        'name'      => 'Nome',
        'price'     => 'Prezzo',
        'size'      => 'Taglia',
        'type'      => 'Tipo',
    ],
    'index'         => [
        'title' => 'Oggetti',
    ],
    'inventories'   => [
        'title' => 'Inventari dell\'oggetto :name',
    ],
    'placeholders'  => [
        'name'  => 'Nome dell\'oggetto',
        'price' => 'Prezzo dell\'oggetto',
        'size'  => 'Taglia, Peso, Dimensioni',
        'type'  => 'Arma, Pozione, Artefatto',
    ],
    'show'          => [
        'tabs'  => [
            'inventories'   => 'Inventari',
        ],
    ],
];