<?php

return [
    'create'        => [
        'title' => 'Nouvelle Organisation',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'is_defunct'    => 'Défunte',
        'members'       => 'Membres',
    ],
    'helpers'       => [
        'descendants'       => 'Cette liste contient toutes les organisations qui appartiennent directement ou indirectement à cette organisation.',
        'nested_without'    => 'Affichage des organisations sans parent. Cliquer sur une rangées pour afficher les organisations enfants.',
    ],
    'hints'         => [
        'is_defunct'    => 'Cette organisation n\'est plus en opération.',
    ],
    'index'         => [],
    'members'       => [
        'actions'       => [
            'add'       => 'Ajouter un membre',
            'submit'    => 'Nouveau membre',
        ],
        'create'        => [
            'success'   => 'Membre ajouté à l\'organisation :name.',
            'title'     => 'Nouveau membre pour :name',
        ],
        'destroy'       => [
            'success'   => 'Membre retiré de l\'organisation',
        ],
        'edit'          => [
            'success'   => 'Membre modifié.',
            'title'     => 'Modifier Membre pour :name',
        ],
        'fields'        => [
            'parent'    => 'Superieur',
            'pinned'    => 'Épinglé',
            'role'      => 'Rôle',
            'status'    => 'Status de membre',
        ],
        'helpers'       => [
            'all_members'   => 'Tous les personnages qui sont membres de cette organisation et des sous-organisations.',
            'members'       => 'Tous les personnages directement membres de cette organisation.',
            'pinned'        => 'Définir sur le membre doit être affiché dans les épingles des entités associées.',
        ],
        'pinned'        => [
            'both'  => 'Les deux',
            'none'  => 'Aucun',
        ],
        'placeholders'  => [
            'parent'    => 'Qui est le supérieur de ce membre',
            'role'      => 'Chef, Membre, Prêtre, Maître d\'arme',
        ],
        'status'        => [
            'active'    => 'Membre actif',
            'inactive'  => 'Membre inactif',
            'unknown'   => 'Status inconnu',
        ],
    ],
    'organisations' => [],
    'placeholders'  => [
        'type'  => 'Culte, Bande, Rebellion',
    ],
    'quests'        => [],
    'show'          => [],
];
