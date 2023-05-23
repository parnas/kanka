<?php

return [
    'create'        => [
        'title' => 'Nuovo Oggetto',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'character' => 'Personaggio',
        'price'     => 'Prezzo',
        'size'      => 'Taglia',
    ],
    'helpers'       => [
        'nested_without'    => 'Visualizzazione di tutti gli oggetti che non hanno un oggetto genitore. Fai clic su una riga per visualizzare gli oggetti figli.',
    ],
    'hints'         => [
        'items' => 'Organizza gli oggetti usando il campo dell\'oggetto genitore.',
    ],
    'index'         => [],
    'inventories'   => [],
    'placeholders'  => [
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
