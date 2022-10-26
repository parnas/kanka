<?php

return [
    'characters'    => [
        'title' => 'Personajes en :name',
    ],
    'create'        => [
        'title' => 'Nuevo lugar',
    ],
    'destroy'       => [],
    'edit'          => [],
    'events'        => [
        'title' => 'Eventos en :name',
    ],
    'families'      => [
        'title' => 'Familias en :name',
    ],
    'fields'        => [
        'characters'        => 'Personajes',
        'image'             => 'Imagen',
        'is_map_private'    => 'Mapa privado',
        'location'          => 'Localización superior',
        'locations'         => 'Lugares',
        'map'               => 'Mapa',
        'name'              => 'Nombre',
        'type'              => 'Tipo',
    ],
    'helpers'       => [
        'characters'        => 'Muestra todos los personajes en este lugar y sus lugares anidados, o solo los que están aquí.',
        'descendants'       => 'Esta lista contiene todas las localizaciones que son descendientes de estos lugares, además de las que están directamente por debajo.',
        'families'          => 'Hay lugares donde se asientan poderosas familias.',
        'map'               => 'Al añadir un mapa a un lugar, podrás crear puntos en él y enlazar a otras entidades de la campaña.',
        'map_deprecated_2'  => '¡Ahora los mapas tienen su propio módulo! Aún se pueden editar los mapas antiguos, pero todos los nuevos estarán en el nuevo módulo.',
        'nested_without'    => 'Mostrando todos los lugares sin ningún superior. Haz clic sobre una fila para mostrar sus descendientes.',
        'organisations'     => 'Ver todas las organizaciones de esta localización y sus sublocalizaciones, o solo las que están directamente aquí.',
    ],
    'hints'         => [
        'is_map_private'    => 'Un mapa privado solo será visible para los miembros con el rol "Admin".',
    ],
    'index'         => [
        'title' => 'Lugares',
    ],
    'items'         => [],
    'journals'      => [],
    'locations'     => [
        'title' => 'Lugares de :name',
    ],
    'map'           => [
        'actions'   => [
            'admin_mode'        => 'Habilitar modo de edición',
            'big'               => 'Vista completa',
            'confirm_delete'    => '¿Seguro que quieres eliminar este punto del mapa?',
            'download'          => 'Descargar',
            'points'            => 'Editar puntos',
            'toggle_hide'       => 'Ocultar puntos',
            'toggle_show'       => 'Mostrar puntos',
            'view_mode'         => 'Volver al modo de vista',
            'zoom_in'           => 'Acercar',
            'zoom_out'          => 'Alejar',
            'zoom_reset'        => 'Resetear zoom',
        ],
        'helper'    => 'Haz click en el mapa para añadir un nuevo punto a una localización, o selecciona un punto existente para editarlo o eliminarlo.',
        'helpers'   => [
            'admin' => 'Actívalo para habilitar la creación de nuevos puntos sólo con hacer clic en el mapa, editarlos al seleccionarlos y moverlos fácilmente.',
            'info'  => 'Más información sobre los mapas.',
            'label' => 'Este punto es una descripción. Nada más y nada menos.',
            'view'  => 'Haz clic en cualquier punto del mapa para ver los detalles. Usa Ctrl+Rueda para acercarte y alejarte del mapa.',
        ],
        'legend'    => 'Leyenda',
        'modal'     => [
            'submit'    => 'Añadir',
            'title'     => 'Selección de nuevo punto',
        ],
        'no_map'    => 'Por favor, sube el mapa de la localización primero.',
        'points'    => [
            'empty_label'   => 'Punto sin nombre',
            'fields'        => [
                'axis_x'    => 'Eje X',
                'axis_y'    => 'Eje Y',
                'colour'    => 'Color',
                'icon'      => 'Icono',
                'name'      => 'Nombre',
                'shape'     => 'Forma',
                'size'      => 'Tamaño',
            ],
            'helpers'       => [
                'location_or_name'  => 'Un punto del mapa puede dirigir a una localización existente, o simplemente tener una etiqueta.',
            ],
            'icons'         => [
                'anchor'        => 'Ancla',
                'anvil'         => 'Yunque',
                'apple'         => 'Manzana',
                'aura'          => 'Aura',
                'axe'           => 'Hacha',
                'beer'          => 'Cerveza',
                'biohazard'     => 'Peligro biológico',
                'book'          => 'Libro',
                'bridge'        => 'Puente',
                'campfire'      => 'Hoguera',
                'candle'        => 'Vela',
                'capitol'       => 'Capitolio',
                'castle-emblem' => 'Castillo',
                'cat'           => 'Gato',
                'cheese'        => 'Queso',
                'cog'           => 'Engranaje',
                'crown'         => 'Corona',
                'dead-tree'     => 'Árbol muerto',
                'diamond'       => 'Diamante',
                'dragon'        => 'Dragón',
                'emerald'       => 'Esmeralda',
                'entity'        => 'Imagen de la entidad',
                'fire'          => 'Fuego',
                'flask'         => 'Frasco',
                'flower'        => 'Flor',
                'horseshoe'     => 'Herradura',
                'hourglass'     => 'Reloj de arena',
                'hydra'         => 'Hidra',
                'kaleidoscope'  => 'Caleidoscopio',
                'key'           => 'Llave',
                'lever'         => 'Palanca',
                'meat'          => 'Carne',
                'octopus'       => 'Pulpo',
                'palm-tree'     => 'Palmera',
                'pin'           => 'Pin',
                'pine-tree'     => 'Pino',
                'player'        => 'Personaje',
                'potion'        => 'Poción',
                'reactor'       => 'Reactor',
                'repair'        => 'Herramientas',
                'sheep'         => 'Oveja',
                'shield'        => 'Escudo',
                'skull'         => 'Calavera',
                'snake'         => 'Serpiente',
                'spades-card'   => 'Carta de póker',
                'sprout'        => 'Brote',
                'sun'           => 'Sol',
                'tentacle'      => 'Tentáculo',
                'toast'         => 'Tostada',
                'tombstone'     => 'Lápida',
                'torch'         => 'Antorcha',
                'tower'         => 'Torre',
                'vase'          => 'Jarrón',
                'water-drop'    => 'Agua',
                'wooden-sign'   => 'Cartel de madera',
                'wrench'        => 'Llave inglesa',
            ],
            'modal'         => 'Crear o editar punto del mapa',
            'placeholders'  => [
                'axis_x'    => 'Posición izquierda',
                'axis_y'    => 'Posición superior',
                'name'      => 'Etiqueta del punto cuando no se ha establecido ninguna localización.',
            ],
            'return'        => 'Volver a :name',
            'shapes'        => [
                'circle'    => 'Círculo',
                'custom'    => 'Personalizada',
                'square'    => 'Cuadrado',
            ],
            'sizes'         => [
                'custom'    => 'Personalizado',
                'huge'      => 'Enorme',
                'large'     => 'Grande',
                'small'     => 'Pequeño',
                'standard'  => 'Estándar',
                'tiny'      => 'Mini',
            ],
            'success'       => [
                'create'    => 'Punto de localización creado en el mapa.',
                'delete'    => 'Punto de localización eliminado del mapa.',
                'update'    => 'Punto de localización actualizado en el mapa.',
            ],
            'title'         => 'Puntos del mapa de :name',
        ],
        'success'   => 'Puntos del mapa guardados.',
    ],
    'maps'          => [
        'title' => 'Mapas de :name',
    ],
    'organisations' => [
        'title' => 'Organizaciones de :name',
    ],
    'panels'        => [
        'map'   => 'Mapa',
    ],
    'placeholders'  => [
        'location'  => 'Elige el lugar al que está vinculado',
        'name'      => 'Nombre del lugar',
        'type'      => 'Ciudad, Reino, Ruinas',
    ],
    'quests'        => [],
    'show'          => [
        'tabs'  => [
            'characters'    => 'Personajes',
            'locations'     => 'Lugares',
            'map'           => 'Mapa',
            'maps'          => 'Mapas',
        ],
    ],
];