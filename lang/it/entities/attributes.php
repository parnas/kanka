<?php

return [
    'actions'       => [
        'apply_template'    => 'Applica un Modello per gli Attributi',
        'more'              => 'Altro',
        'save_and_edit'     => 'Applica e Modifica',
        'save_and_story'    => 'Applica e Visualizza',
        'show_hidden'       => 'Mostra attributi nascosti',
    ],
    'errors'        => [
        'loop'      => 'Il calcolo di questo attributo è un ciclo infinito!',
        'too_many'  => 'Ci sono troppi campi in questa entità, non è possibile aggiungere altri attributi. Eliminare alcuni attributi prima di poterne aggiungere altri.',
    ],
    'fields'        => [
        'community_templates'   => 'Modelli della Comunità',
        'template'              => 'Modello',
    ],
    'filters'       => [
        'name'  => 'Nome dell\'attributo',
        'value' => 'Valore dell\'attributo',
    ],
    'helpers'       => [
        'setup' => 'Puoi rappresentare elementi come Punti Ferita o l\'intelligenza di un\'entità con degli attributi. È possibile aggiungere manualmente gli attributi facendo clic sul pulsante :manage, oppure applicare automaticamente quelli di un modello di attributo.',
    ],
    'hints'         => [
        'is_private2'   => 'Se selezionato, solo i membri del ruolo :admin-role possono vedere gli attributi di questa entità.',
    ],
    'index'         => [],
    'labels'        => [
        'checkbox'  => 'Nome del Checkbox',
        'name'      => 'Nome dell\'attributo',
        'section'   => 'Nome della sezione',
        'value'     => 'Valore dell\'attributo',
    ],
    'live'          => [
        'success'   => 'Attributo :attribute aggiornato.',
        'title'     => 'Aggiornando :attribute',
    ],
    'placeholders'  => [
        'attribute' => 'Numero di Conquiste, Grado di Sfida, Iniziativa, Popolazione',
        'checkbox'  => 'Nome del Checkbox',
        'icon'      => [
            'class' => 'Classe: fas fa-users di FontAwesome o RPG Awesome',
            'name'  => 'Nome dell\'icona',
        ],
        'number'    => 'Valore numerico',
        'random'    => [
            'name'  => 'Nome dell\'attributo',
            'value' => '1-100 o lista di valori separati da una virgola',
        ],
    ],
    'ranges'        => [
        'text'  => 'Opzioni disponibili :options',
    ],
    'show'          => [
        'hidden'    => 'Attributi Nascosti',
        'title'     => 'Attributi di :name',
    ],
    'template'      => [
        'success'   => 'Il Modello di Attributi :name è stato applicato a :entity',
        'title'     => 'Applica un Modello degli Attributi per :name',
    ],
    'toasts'        => [
        'lock'      => 'Attributo bloccato',
        'pin'       => 'Attributo fissato',
        'unlock'    => 'Attributo sbloccato',
        'unpin'     => 'Attributo non fissato',
    ],
    'types'         => [
        'icon'      => 'Icona',
        'number'    => 'Numero',
        'random'    => 'Random',
    ],
    'update'        => [
        'success'   => 'Attributi per :entity aggiornati',
    ],
    'visibility'    => [
        'entry' => 'Gli attributi sono visualizzati nel menu dell\'entità.',
    ],
];
