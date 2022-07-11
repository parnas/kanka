<?php

return [
    'actions'                   => [
        'actions'           => 'Accións',
        'apply'             => 'Aplicar',
        'back'              => 'Voltar',
        'copy'              => 'Copiar',
        'copy_mention'      => 'Copiar mención [ ]',
        'copy_to_campaign'  => 'Copiar a campaña',
        'explore_view'      => 'Vista en árbore',
        'export'            => 'Exportar (PDF)',
        'find_out_more'     => 'Saber máis',
        'go_to'             => 'Ir a :name',
        'help'              => 'Axuda',
        'json-export'       => 'Exportar (JSON)',
        'manage_links'      => 'Administrar ligazóns',
        'move'              => 'Mover',
        'new'               => 'Crear nova',
        'new_post'          => 'Nova entrada',
        'next'              => 'Seguinte',
        'print'             => 'Imprimir',
        'reset'             => 'Restablecer',
        'transform'         => 'Transformar',
    ],
    'add'                       => 'Engadir',
    'alerts'                    => [
        'copy_attribute'    => 'A mención do atributo foi copiada ao portapapeis.',
        'copy_mention'      => 'A mención avanzada da entidade foi copiada ao portapapeis.',
    ],
    'boosted'                   => 'Potenciada',
    'boosted_campaigns'         => 'Campañas potenciadas',
    'bulk'                      => [
        'actions'       => [
            'edit'  => 'Editar e etiquetar en bloque',
        ],
        'age'           => [
            'helper'    => 'Usa + e - antes do número para modificar a idade nesa cantidade.',
        ],
        'delete'        => [
            'warning'   => 'Seguro que queres eliminar as entidades seleccionadas?',
        ],
        'edit'          => [
            'tagging'   => 'Acción para as etiquetas',
            'tags'      => [
                'add'       => 'Engadir',
                'remove'    => 'Eliminar',
            ],
            'title'     => 'Editando múltiples entidades',
        ],
        'errors'        => [
            'admin'     => 'Só a administración da campaña pode cambiar o estado de privacidade das entidades.',
            'general'   => 'Houbo un erro ao procesar a acción. Inténtao de novo e contáctanos se o problema persiste. Mensaxe do erro: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Substituír',
            ],
            'helpers'   => [
                'override'  => 'Se está seleccionado, os permisos das entidades seleccionadas serán substituídos por estes. Se non está seleccionado, os permisos seleccionados serán engadidos aos existentes.',
            ],
            'title'     => 'Cambiar os permisos a varias entidades',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} :count entidade copiada a ":campaign".|[2,*] :count entidades copiadas a ":campaign".',
            'editing'           => '{1} :count entidade actualizada.|[2,*] :count entidades actualizadas.',
            'editing_partial'   => '{1} :count/:total entidade actualizada.|[2,*] entidades actualizadas.',
            'permissions'       => '{1} Permisos alterados para :count entidade.|[2,*] Permisos alterados para :count entidades.',
            'private'           => '{1} :count entidade é agora privada|[2,*] :count entidades son agora privadas.',
            'public'            => '{1} :count entidade é agora visíbel|[2,*] :count entidades son agora visíbeis.',
            'templates'         => '{1} Aplicouse un padrón a :count entidade.|[2,*] Aplicouse un padrón a :count entidades.',
        ],
    ],
    'bulk_templates'            => [
        'bulk_title'    => 'Aplica un padrón a múltiples entidades',
    ],
    'cancel'                    => 'Cancelar',
    'click_modal'               => [
        'close'     => 'Pechar',
        'confirm'   => 'Confirmar',
        'title'     => 'Confirma a túa acción',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Copiar entidades a outra campaña',
        'panel'         => 'Copiar',
        'title'         => 'Copiar ":name" a outra campaña',
    ],
    'create'                    => 'Crear',
    'datagrid'                  => [
        'empty' => 'Nada que mostrar (aínda).',
    ],
    'delete_modal'              => [
        'close'             => 'Pechar',
        'delete'            => 'Eliminar',
        'description_v2'    => 'Estás eliminando ":tag".',
        'permanent'         => 'Esta acción é permanente.',
        'recoverable'       => 'As entidades poden ser recuperadas ata :day días despois nunha :boosted-campaign.',
        'title'             => 'Confirmación de eliminación',
    ],
    'destroy_many'              => [
        'success'   => 'Eliminouse :count entidade|Elimináronse :count entidades.',
    ],
    'edit'                      => 'Editar',
    'errors'                    => [
        'boosted'                       => 'Esta función só está dispoñíbel para campañas potenciadas.',
        'boosted_campaigns'             => 'Esta función só está dispoñíbel para :boosted.',
        'cannot_move_node_into_itself'  => 'A entidade superior seleccionada non é válida. Comproba que non sexa descendente desta entidade.',
        'node_must_not_be_a_descendant' => 'Nó inválido (etiqueta, localización nai): sería un descendente de si mesmo.',
        'unavailable_feature'           => 'Función non dispoñíbel',
    ],
    'events'                    => [],
    'export'                    => 'Exportar',
    'fields'                    => [
        'ability'               => 'Habilidade',
        'attribute_template'    => 'Padrón de atributos',
        'calendar'              => 'Calendario',
        'calendar_date'         => 'Data do calendario',
        'character'             => 'Personaxe',
        'child'                 => 'Descendente',
        'closed'                => 'Pechada',
        'colour'                => 'Cor',
        'copy_abilities'        => 'Copiar habilidades',
        'copy_attributes'       => 'Copiar atributos',
        'copy_inventory'        => 'Copiar inventario',
        'copy_links'            => 'Copiar ligazóns de entidade',
        'copy_permissions'      => 'Copiar permisos (isto sobrescribirá os valores establecidos na lapela de permisos)',
        'copy_posts'            => 'Copiar entradas (incluíndo os permisos de cada entrada)',
        'creator'               => 'Creada por',
        'dice_roll'             => 'Tirada de dados',
        'entity'                => 'Entidade',
        'entity_type'           => 'Tipo de entidade',
        'entry'                 => 'Entrada principal',
        'event'                 => 'Evento',
        'excerpt'               => 'Limiar',
        'family'                => 'Familia',
        'files'                 => 'Arquivos',
        'gallery_header'        => 'Cabeceira de galería',
        'gallery_image'         => 'Imaxe de galería',
        'has_attributes'        => 'Ten atributos',
        'has_entity_files'      => 'Ten arquivos de entidade',
        'has_entity_notes'      => 'Ten entradas',
        'has_image'             => 'Contén unha imaxe',
        'header_image'          => 'Imaxe de cabeceira',
        'image'                 => 'Imaxe',
        'is_closed'             => 'A conversa será pechada e non aceptará novas mensaxes.',
        'is_private'            => 'Privada',
        'is_private_v3'         => 'Mostra isto só a integrantes do rol :admin-role da campaña. Isto sobrescribe calquera outro permiso.',
        'is_star'               => 'Fixada',
        'item'                  => 'Obxecto',
        'journal'               => 'Caderno',
        'location'              => 'Localización',
        'locations'             => ':first en :second',
        'map'                   => 'Mapa',
        'name'                  => 'Nome',
        'organisation'          => 'Organización',
        'position'              => 'Posición',
        'privacy'               => 'Privacidade',
        'race'                  => 'Raza',
        'tag'                   => 'Etiqueta',
        'tags'                  => 'Etiquetas',
        'timeline'              => 'Liña temporal',
        'tooltip'               => 'Previsualización emerxente',
        'type'                  => 'Tipo',
        'visibility'            => 'Visibilidade',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Fai clic para engadir un arquivo, ou arrástrao ata aquí.',
            'manage'    => 'Administrar arquivos de entidade',
        ],
        'errors'    => [
            'max'       => 'Chegaches ao número máximo (:max) de arquivos para esta entidade.',
            'no_files'  => 'Non hai arquivos.',
        ],
        'files'     => 'Arquivos subidos.',
        'hints'     => [
            'limit'         => 'Cada entidade pode ter ata :max arquivos subidos.',
            'limitations'   => 'Formatos soportados: :formats. Tamaño máximo do arquivo: :size',
        ],
        'title'     => 'Arquivos da entidade ":name"',
    ],
    'filter'                    => 'Filtrar',
    'filters'                   => [
        'all'                       => 'Filtrar para todas as entidades descendentes',
        'clear'                     => 'Quitar filtros',
        'copy_helper'               => 'Usa os filtros copiados no teu portapapeis como valores para filtros en extensións de taboleiro e accesos directos.',
        'copy_helper_no_filters'    => 'Define primeiro algúns filtros para poder copialos ao teu portapapeis.',
        'copy_to_clipboard'         => 'Copiar filtros ao portapapeis',
        'direct'                    => 'Filtrar só descendentes directas',
        'filtered'                  => 'Mostrando :count de :total :entity.',
        'hide'                      => 'Ocultar filtros',
        'lists'                     => [
            'desktop'   => [
                'all'       => 'Mostrar todas as descendentes (:count)',
                'filtered'  => 'Mostrar descendentes directas (:count)',
            ],
            'mobile'    => [
                'all'       => 'Mostrar todas (:count)',
                'filtered'  => 'Mostrar directas (:count)',
            ],
        ],
        'mobile'                    => [
            'clear' => 'Limpar',
            'copy'  => 'Portapapeis',
        ],
        'options'                   => [
            'exclude'   => 'Excluír',
            'include'   => 'Incluír',
            'none'      => 'Ningún',
        ],
        'show'                      => 'Mostrar filtros',
        'sorting'                   => [
            'asc'       => 'Ascendente segundo :field',
            'desc'      => 'Descendente segundo :field',
            'helper'    => 'Controla en que orde aparecen os resultados.',
        ],
        'title'                     => 'Filtros',
    ],
    'fix-this-issue'            => 'Arranxar este problema',
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Engadir unha data de calendario',
        ],
        'copy_options'  => 'Opcións de copia',
    ],
    'helpers'                   => [
        'copy_options'  => 'Copiar os seguintes elementos relacionados dende a fonte á nova entidade.',
        'linking'       => 'Ligar outras entidades',
    ],
    'hidden'                    => 'Oculto',
    'hints'                     => [
        'attribute_template'    => 'Aplica un padrón de atributos directamente ao crear ou editar esta entidade.',
        'calendar_date'         => 'Unha data de calendario permite filtrar facilmente en listas, e tamén asigna un evento ao calendario seleccionado.',
        'gallery_header'        => 'Se a entidade non ten cabeceira, mostra unha imaxe da galería da campaña no seu lugar.',
        'gallery_image'         => 'Se a entidade non ten imaxe, mostra unha imaxe da galería da campaña no seu lugar.',
        'header_image'          => 'Esta imaxe é situada enriba da entidade. Para obter os mellores resultados, usa unha imaxe ancha.',
        'image_limitations'     => 'Formatos soportados: :formats. Tamaño máximo do arquivo: :size.',
        'image_patreon'         => 'Queres aumentar o tamaño máximo dos arquivos?',
        'image_recommendation'  => 'Dimensións recomendadas: :width x :height px.',
        'is_star'               => 'Os elementos fixados aparecerán no menú da entidade',
        'tooltip'               => 'Substitúe a previsualización emerxente por defecto polo seguinte contido.',
        'visibility'            => 'Seleccionando "Administración", só a Administración da campaña poderá ver isto. "Só eu" significa que só ti poderás velo.',
    ],
    'history'                   => [
        'created_clean'         => 'Creada por :name :date',
        'created_date_clean'    => 'Creada :date',
        'unknown'               => 'Descoñecido',
        'updated_clean'         => 'Modificada por última vez por :name :date',
        'updated_date_clean'    => 'Modificada por última vez :date',
        'view'                  => 'Ver historial de cambios da entidade',
    ],
    'image'                     => [
        'error' => 'Non fomos capaces de obter a imaxe solicitada. Pode ser que a páxina web non nos deixe descargala (típico de Squarespace e DevianArt), ou pode que a ligazón non sexa válida. Asegúrate de que a imaxe non supera os :size.',
    ],
    'is_not_private'            => 'Actualmente, esta entidade non é privada.',
    'is_private'                => 'Esta entidade é privada e só visíbel para a Administración da campaña.',
    'legacy'                    => 'En desuso',
    'linking_help'              => 'Como ligar a outras entidades?',
    'manage'                    => 'Administrar',
    'move'                      => [],
    'navigation'                => [
        'cancel'            => 'cancelar',
        'or_cancel'         => 'ou :cancel',
        'skip_to_content'   => 'Saltar navegación',
    ],
    'new_entity'                => [
        'error' => 'Por favor, revisa os valores introducidos.',
        'fields'=> [
            'name'  => 'Nome',
        ],
        'title' => 'Nova entidade',
    ],
    'panels'                    => [
        'appearance'            => 'Aparencia',
        'attribute_template'    => 'Padrón de atributos',
        'calendar_date'         => 'Data de calendario',
        'entry'                 => 'Entrada principal',
        'general_information'   => 'Información xeral',
        'move'                  => 'Mover',
        'system'                => 'Sistema',
    ],
    'permissions'               => [
        'action'            => 'Acción',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Permitir',
                'deny'      => 'Denegar',
                'ignore'    => 'Ignorar',
                'remove'    => 'Quitar',
            ],
            'bulk_entity'   => [
                'allow'     => 'Permitir',
                'deny'      => 'Denegar',
                'inherit'   => 'Herdar',
            ],
            'delete'        => 'Eliminar',
            'edit'          => 'Editar',
            'entity_note'   => 'Entradas',
            'read'          => 'Ler',
            'toggle'        => 'Alternar',
        ],
        'allowed'           => 'Permitido',
        'fields'            => [
            'member'    => 'Membra',
            'role'      => 'Rol',
        ],
        'helper'            => 'Usa esta interface para axustar que integrantes e que roles poden interaccionar con esta entidade. :allow',
        'helpers'           => [
            'setup' => 'Usa esta interface para axustar como os diferentes roles e integrantes poden interaccionar con esta entidade. :allow permitirá á integrante/rol realizar a acción correspondente. :deny non lles deixará realizar a acción. :inherit usará os permisos do rol da integrante ou do rol principal. Unha integrante cunha acción establecida en :allow poderá realizar esa acción, aínda que no seu rol esté en :deny.',
        ],
        'inherited'         => 'Este rol xa ten este permiso establecido para este tipo de entidade.',
        'inherited_by'      => 'Esta persoa é parte do rol ":role", o cal lle otorga permisos neste tipo de entidade.',
        'success'           => 'Permisos gardados.',
        'title'             => 'Permisos',
        'too_many_members'  => 'Esta campaña ten demasiadas integrantes (>10) para poder mostralas todas nesta interface. Usa o botón "Permisos" na vista de entidade para controlar os permisos detalladamente.',
    ],
    'placeholders'              => [
        'ability'       => 'Escolle unha habilidade',
        'calendar'      => 'Escolle un calendario',
        'character'     => 'Escolle unha personaxe',
        'entity'        => 'Entidade',
        'event'         => 'Escolle un evento',
        'family'        => 'Escolle unha familia',
        'gallery_image' => 'Escolle unha imaxe da galería da campaña',
        'image_url'     => 'Tamén podes subir unha imaxe dende a súa URL',
        'item'          => 'Escolle un obxecto',
        'journal'       => 'Escolle un caderno',
        'location'      => 'Escolle un lugar',
        'map'           => 'Escolle un mapa',
        'note'          => 'Escolle unha nota',
        'organisation'  => 'Escolle unha organización',
        'quest'         => 'Escolle unha misión',
        'race'          => 'Escolle unha raza',
        'tag'           => 'Escolle unha etiqueta',
        'timeline'      => 'Escolle unha liña temporal',
    ],
    'relations'                 => [
        'fields'    => [
            'location'  => 'Localización',
            'name'      => 'Nome',
            'relation'  => 'Relación',
        ],
        'hint'      => 'As relacións entre entidades poden representar como están conectadas entre elas.',
    ],
    'remove'                    => 'Eliminar',
    'rename'                    => 'Renomear',
    'save'                      => 'Gardar',
    'save_and_close'            => 'Gardar e pechar',
    'save_and_copy'             => 'Gardar e copiar',
    'save_and_new'              => 'Gardar e crear nova',
    'save_and_update'           => 'Gardar e continuar editando',
    'save_and_view'             => 'Gardar e visualizar',
    'search'                    => 'Buscar',
    'select'                    => 'Seleccionar',
    'superboosted_campaigns'    => 'Campañas superpotenciadas',
    'tabs'                      => [
        'abilities'     => 'Habilidades',
        'assets'        => 'Recursos',
        'attributes'    => 'Atributos',
        'boost'         => 'Potenciar',
        'calendars'     => 'Calendarios',
        'connections'   => 'Conexións',
        'default'       => 'Por defecto',
        'events'        => 'Eventos',
        'inventory'     => 'Inventario',
        'links'         => 'Ligazóns',
        'map-points'    => 'Puntos do mapa',
        'mentions'      => 'Mencións',
        'menu'          => 'Menú',
        'notes'         => 'Entradas',
        'overview'      => 'Vista xeral',
        'permissions'   => 'Permisos',
        'profile'       => 'Perfil',
        'quests'        => 'Misións',
        'relations'     => 'Relacións',
        'reminders'     => 'Lembretes',
        'story'         => 'Entradas',
        'timelines'     => 'Liñas temporais',
        'tooltip'       => 'Previsualización emerxente',
    ],
    'titles'                    => [
        'editing'   => 'Editando ":name"',
    ],
    'tooltips'                  => [
        'boosted_feature'   => 'Funcionalidade de campaña potenciada',
        'new_post'          => 'Engade unha nova entrada a esta entidade.',
    ],
    'update'                    => 'Actualizar',
    'users'                     => [
        'unknown'   => 'Descoñecida',
    ],
    'view'                      => 'Ver',
    'visibilities'              => [
        'admin'         => 'Administración',
        'admin-self'    => 'Eu e Administración',
        'all'           => 'Todo o mundo',
        'members'       => 'Integrantes',
        'self'          => 'Só eu',
    ],
];
