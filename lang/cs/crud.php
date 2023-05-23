<?php

return [
    'actions'                   => [
        'actions'           => 'Akce',
        'apply'             => 'Použít',
        'back'              => 'Zpět',
        'copy'              => 'Kopírovat',
        'copy_mention'      => 'Kopírovat odkaz typu [ ]',
        'copy_to_campaign'  => 'Kopírovat do tažení',
        'explore_view'      => 'Vnořené zobrazení',
        'export'            => 'Exportovat (PDF)',
        'find_out_more'     => 'Další informace',
        'go_to'             => 'Přejít na :name',
        'json-export'       => 'Exportovat (JSON)',
        'manage_links'      => 'Upravit odkazy',
        'move'              => 'Přesunout',
        'new'               => 'Nový',
        'new_post'          => 'Nová poznámka',
        'next'              => 'Další',
        'print'             => 'Tisknout',
        'reset'             => 'Vrátit výchozí hodnoty',
        'transform'         => 'Změnit',
    ],
    'add'                       => 'Přidat',
    'alerts'                    => [
        'copy_attribute'    => 'Odkaz na atribut uložen do schránky.',
        'copy_mention'      => 'Odkaz pokročilého typu uložen do schránky.',
    ],
    'bulk'                      => [
        'actions'       => [
            'edit'  => 'Hromadná úprava nebo označení štítky',
        ],
        'age'           => [
            'helper'    => 'Znamínky + a - před číslem lze upravit věk o daný počet.',
        ],
        'delete'        => [
            'warning'   => 'Opravdu chceš odstranit vybrané objekty?',
        ],
        'edit'          => [
            'tagging'   => 'Úprava štítků',
            'tags'      => [
                'add'       => 'Přidat',
                'remove'    => 'Odstranit',
            ],
            'title'     => 'Upravit více objektů',
        ],
        'errors'        => [
            'admin'     => 'Pouze správce tažení může změnit stav soukromí objektů.',
            'general'   => 'Došlo k chybě při zpracování akce. Zkus to prosím znovu. Pokud problém nezmizí, dej nám vědět. Chybová hláška: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Přepsat',
            ],
            'helpers'   => [
                'override'  => 'Je-li zaškrtnuto, oprávnění vybraných objektů budou nahrazena těmito. Jinak budou vybraná oprávnění sloučena se stávajícími.',
            ],
            'title'     => 'Změnit oprávnění více objektům',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} :count objekt zkopírován do tažení :campaign.|[2,4] :count objekty zkopírovány do tažení :campaign.|[5,*] :count objektů zkopírováno do tažení :campaign.',
            'editing'           => '{1} :count objekt upraven.|[2,4] :count objekty upraveny.|[5,*] :count objektů upraveno.',
            'editing_partial'   => '{1} :count/:total objekt byl upraven.|[2,4] :count/:total objekty byly upraveny.|[5,*] :count/:total bylo upraveno.',
            'permissions'       => '{1} Oprávnění změněno pro :count objekt.|[2,4] Oprávnění změněno pro :count objekty.|[5,*] Oprávnění změněno pro :count objektů',
            'private'           => '{1} :count objekt je nyní soukromý.|[2,4] :count objekty jsou nyní soukromé.|[5,*] :count objektů jsou nyní soukromých.',
            'public'            => '{1} :count objekt je nyní viditelný.|[2,4] :count objekty jsou nyní viditelné.|[5,*] :count objektů je nyní viditelných.',
            'templates'         => '{1} Šablona použita na :count objekt.|[2,4] Šablona použita na :count objekty.|[5,*] Šablona použita na :count objektů.',
        ],
    ],
    'bulk_templates'            => [
        'bulk_title'    => 'Použít šablonu na více objektů',
    ],
    'cancel'                    => 'Zrušit',
    'click_modal'               => [
        'close'     => 'Zavřít',
        'confirm'   => 'Potvrdit',
        'title'     => 'Potvrdit akci',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Kopírovat objekty do jiného tažení',
        'panel'         => 'Kopírovat',
        'title'         => 'Kopírovat ":name" do jiného tažení',
    ],
    'create'                    => 'Vytvořit',
    'datagrid'                  => [
        'empty' => 'Zatím zde nic není.',
    ],
    'delete_modal'              => [
        'close' => 'Zavřít',
        'delete'=> 'Odstranit',
        'title' => 'Potvrdit odstranění',
    ],
    'destroy_many'              => [
        'success'   => '{1} Smazán :count objekt.|[2,4] Smazány :count objekty.|[5,*] Smazáno :count objektů.',
    ],
    'edit'                      => 'Upravit',
    'errors'                    => [
        'boosted'                       => 'Tato funkce je dostupná pouze pro zvýhodněná ("boosted") tažení.',
        'boosted_campaigns'             => 'Tato funkce je dostupná pouze pro zvýhodněná ("boosted")',
        'node_must_not_be_a_descendant' => 'Neplatný objekt (štítek, nadřazená lokace): Objekt nemůže být podřazen sám sobě.',
        'unavailable_feature'           => 'Nedostupná funkce',
    ],
    'events'                    => [],
    'fields'                    => [
        'calendar_date'     => 'Kalendářní datum',
        'child'             => 'Podřazený',
        'closed'            => 'Uzavřeno',
        'colour'            => 'Barva',
        'copy_abilities'    => 'Kopírovat schopnosti',
        'copy_attributes'   => 'Kopírovat atributy',
        'copy_inventory'    => 'Kopírovat inventář',
        'copy_links'        => 'Kopírovat odkazy na objekty',
        'creator'           => 'Autor',
        'entity'            => 'Objekt',
        'entity_type'       => 'Typ objektu',
        'entry'             => 'Záznam',
        'excerpt'           => 'Výpis',
        'files'             => 'Soubory',
        'gallery_header'    => 'Záhlaví galerie',
        'gallery_image'     => 'Obrázek galerie',
        'has_entity_files'  => 'Obsahuje soubory',
        'has_image'         => 'Obsahuje obrázky',
        'header_image'      => 'Obrázek záhlavi',
        'image'             => 'Obrázek',
        'is_closed'         => 'Rozhovor bude uzavřen a nadále do něj nebude možno přidávat nové zprávy.',
        'is_private'        => 'Soukromý',
        'is_star'           => 'Připnuté',
        'locations'         => ':first ve :second',
        'name'              => 'Název',
        'position'          => 'Pozice',
        'privacy'           => 'Soukromí',
        'tooltip'           => 'informační bublina',
        'type'              => 'Typ',
        'visibility'        => 'Viditelnost',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Přidej soubor klepnutím a výběrem nebo přetažením',
            'manage'    => 'Spravovat soubory objektu',
        ],
        'errors'    => [
            'max'       => 'Dosaženo maximálního počtu (:max) souborů pro tento objekt.',
            'no_files'  => 'Žádné soubory.',
        ],
        'files'     => 'Nahrané soubory',
        'hints'     => [
            'limit'         => 'Ke každému objektu lze nahrát nejvýše :max souborů.',
            'limitations'   => 'Podporované formáty: :formats. Maximální velikost souboru: :size',
        ],
        'title'     => 'Soubory objektu :name',
    ],
    'filter'                    => 'Filtr',
    'filters'                   => [
        'all'                       => 'Pouze podřízené objekty',
        'clear'                     => 'Zrušit filtry',
        'copy_helper'               => 'Definici filtrů uloženou ve schránce lze použít jako hodnotu filtrů na součástech nástěnky a v záložkách.',
        'copy_helper_no_filters'    => 'Před uložením do schránky je třeba definovat nějaké filtry.',
        'copy_to_clipboard'         => 'Uložit filtry do schránky',
        'direct'                    => 'Jen přímo podřízené objekty',
        'filtered'                  => 'Zobrazuje se :count z celkového počtu :total objektů.',
        'hide'                      => 'Skrýt filtry',
        'lists'                     => [
            'desktop'   => [
                'all'       => 'Zobrazit všechny podřazené (:count)',
                'filtered'  => 'Zobrazit jen přímo podřazené (:count)',
            ],
            'mobile'    => [
                'all'       => 'Zobrazit všechny (:count)',
                'filtered'  => 'Zobrazit přímé (:count)',
            ],
        ],
        'mobile'                    => [
            'clear' => 'Vymazat',
            'copy'  => 'Schránka',
        ],
        'options'                   => [
            'exclude'   => 'Vyjmout',
            'include'   => 'Zahrnout',
            'none'      => 'Žádné',
        ],
        'show'                      => 'Zobrazit filtry',
        'sorting'                   => [
            'asc'       => 'Podle pole :field vzestupně',
            'desc'      => 'Podle pole :field sestupně',
            'helper'    => 'Určuje pořadí zobrazení objektů',
        ],
        'title'                     => 'Filtry',
    ],
    'fix-this-issue'            => 'Opravit problém',
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Přidat kalendářní datum',
        ],
        'copy_options'  => 'Zkopírovat nastavení',
    ],
    'helpers'                   => [
        'copy_options'  => 'Zkopírovat vybrané související prvky do nového objektu.',
    ],
    'hidden'                    => 'Skrytý',
    'hints'                     => [
        'attribute_template'    => 'Vybraná šablona atributů se použije při uložení objektu.',
        'calendar_date'         => 'Přítomnost datumu události umožňuje snadné filtrování seznamů a také udržiuje událost ve vybraném kalendáři.',
        'gallery_header'        => 'Pokud objekt nemá vlastní záhlaví, zobrazí se místo něj obrázek z galerie tažení.',
        'gallery_image'         => 'Pokud objekt nemá vlastní obrázek, zobrazí se místo něj obrázek z galerie tažení.',
        'header_image'          => 'Tento obrázek se zobrazuje nad objektem. Doporučujeme použít širokoúhlý obrázek.',
        'image_limitations'     => 'Podporované formáty: :formats. Maximální velikost souboru: :size',
        'is_star'               => 'Připnuté objekty se zobrazí na stránce popisu objektu.',
        'tooltip'               => 'Nahradí automaticky generované informační bubliny následujícím obsahem. Případný HTML kód bude odebrán. Je ale možné použít pokročilý typ odkazů na objekty.',
        'visibility'            => 'Nastavení viditelnosti pouze pro "správce" znamená, že pouze členové role "Správce" si jej budou moci zobrazit. Při nastavení viditelnosti na "Vlastník" bude objekt viditelný jen pro tebe.',
    ],
    'history'                   => [
        'unknown'   => 'Neznámé',
        'view'      => 'Zobrazit protokol objektu',
    ],
    'image'                     => [
        'error' => 'Nepovedlo se nám získat zadaný obrázek. Daná stránka neumožňuje stahování obrázků (což je běžné např. pro Squarespace nebo DeviantArt) nebo daný odkaz již není platný. Zvolený obrázek také nesmí být větší, než :size.',
    ],
    'is_private'                => 'Tento objekt je soukromý a je viditelný pouze pro členy role "Správce".',
    'legacy'                    => 'Dědictví',
    'navigation'                => [
        'cancel'    => 'Zrušit',
        'or_cancel' => 'nebo :cancel',
    ],
    'new_entity'                => [],
    'panels'                    => [],
    'permissions'               => [
        'action'            => 'Akce',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Povolit',
                'deny'      => 'Zakázat',
                'ignore'    => 'Přeskočit',
                'remove'    => 'Odebrat',
            ],
            'bulk_entity'   => [
                'allow'     => 'Povolit',
                'deny'      => 'Zakázat',
                'inherit'   => 'Zdědit',
            ],
            'delete'        => 'Odstranit',
            'edit'          => 'Upravit',
            'read'          => 'Přečíst',
            'toggle'        => 'Přepnout',
        ],
        'allowed'           => 'Povolené',
        'fields'            => [
            'member'    => 'Člen',
            'role'      => 'Role',
        ],
        'helper'            => 'Zde lze doladit, kteří uživatelé nebo role mohou pracovat s tímto objektem. :allow',
        'helpers'           => [
            'setup' => 'Zde lze doladit, jak mohou uživatelé nebo role pracovat s tímto objektem. :allow umožní uživateli nebo roli provádět danou akci. :deny akci znemožní. :inherit použije oprávnění role uživatele nebo oprávnění hlavní role. Nastavení na :allow umožní uživateli provést danou akci, i když je jeho role nastavena na :deny.',
        ],
        'inherited'         => 'Tato role již toto oprávnění k danému typu objektu umožňuje.',
        'inherited_by'      => 'Uživatel je členem role ":role", která přístup k danému typu objektu již umožňuje.',
        'success'           => 'Oprávnění uložena.',
        'title'             => 'Oprávnění',
        'too_many_members'  => 'Tažení má již příliš mnoho členů (více jak 10) pro toto zobrazení. Podrobné zobrazení oprávnění se ukáže klepnutím na tlačítko Oprávnění na stránce objektu.',
    ],
    'placeholders'              => [
        'ability'       => 'Vybrat schopnost',
        'calendar'      => 'Vybrat kalendář',
        'character'     => 'Vybrat postavu',
        'entity'        => 'Objekt',
        'event'         => 'Vybrat událost',
        'family'        => 'Vybrat rod',
        'gallery_image' => 'Vyber obrátek z galerie tažení',
        'image_url'     => 'Obrázek lze nahrát také ze zadaného URL',
        'item'          => 'Vybrat předmět',
        'journal'       => 'Vybrat deník',
        'location'      => 'Vybrat místo',
        'map'           => 'Vybrat mapu',
        'note'          => 'Vybrat poznámku objektu',
        'organisation'  => 'Vybrat organizaci',
        'quest'         => 'Vybrat dobrodružství',
        'race'          => 'Vybrat rasu',
        'tag'           => 'Vybrat štítek',
        'timeline'      => 'Vybrat časovou osu',
    ],
    'relations'                 => [],
    'remove'                    => 'Odstranit',
    'rename'                    => 'Přejmenovat',
    'save'                      => 'Uložit',
    'save_and_close'            => 'Uložit a zavřít',
    'save_and_copy'             => 'Uložit a vytvořit kopii',
    'save_and_new'              => 'Uložit a vytvořit nový',
    'save_and_update'           => 'Uložit a pokračovat',
    'save_and_view'             => 'Uložit a zobrazit',
    'search'                    => 'Hledat',
    'select'                    => 'Vybrat',
    'superboosted_campaigns'    => 'Super-zvýhodněná (superboosted) tažení',
    'tabs'                      => [
        'abilities'     => 'Schopnosti',
        'assets'        => 'Aktiva',
        'attributes'    => 'Atributy',
        'boost'         => 'Zvýhodnit (boost)',
        'connections'   => 'Souvislosti',
        'inventory'     => 'Inventář',
        'links'         => 'Odkazy',
        'permissions'   => 'Oprávnění',
        'profile'       => 'Profil',
        'relations'     => 'Vztahy',
        'reminders'     => 'Připomínky',
        'story'         => 'Příběh',
    ],
    'update'                    => 'Aktualizovat',
    'users'                     => [
        'unknown'   => 'Neznámý',
    ],
    'view'                      => 'Zobrazit',
    'visibilities'              => [
        'admin'         => 'Správce',
        'admin-self'    => 'Vlastník a Správce',
        'all'           => 'Všichni',
        'members'       => 'Členové',
        'self'          => 'Vlastník',
    ],
];
