<?php

return [
    'backup_failed_body'                    => 'Dôležité: Pri vytváraní zálohy :application_name sa vyskytla chyba',
    'backup_failed_subject'                 => 'Chyba pri zálohovaní :application_name',
    'backup_successful_body'                => 'Výborné správy, nová zálohy :application_name bola úspešne vytvorená na disku :disk_name.',
    'backup_successful_subject'             => 'Záloha :application_name bola úspešná',
    'backup_successful_subject_title'       => 'Nová záloha úspešná!',
    'cleanup_failed_body'                   => 'Pri čistení záloh :application_name sa vyskytla chyba',
    'cleanup_failed_subject'                => 'Čistenie záloh :application_name zlyhalo',
    'cleanup_successful_body'               => 'Čistenie záloh :application_name na disku :disk_name bolo úspešné.',
    'cleanup_successful_subject'            => 'Čistenie záloh :application_name úspešné',
    'cleanup_successful_subject_title'      => 'Čistenie záloh skončilo úspešne!',
    'exception_message'                     => 'Hlásenie o chybe: :message',
    'exception_message_title'               => 'Hlásenie o chybe',
    'exception_trace'                       => 'Stopovanie chyby: :trace',
    'exception_trace_title'                 => 'Stopovanie chyby',
    'healthy_backup_found_body'             => 'Zálohy :application_name vyzerajú v poriadku. Len tak ďalej!',
    'healthy_backup_found_subject'          => 'Zálohy :application_name na disku :disk_name sú v poriadku',
    'healthy_backup_found_subject_title'    => 'Zálohy :application_name sú v poriadku',
    'unhealthy_backup_found_body'           => 'Zálohy :application name na disku :disk_name sú poškodené.',
    'unhealthy_backup_found_empty'          => 'Pre túto aplikáciu neexistujú žiadne zálohy.',
    'unhealthy_backup_found_full'           => 'Zálohy vyžadujú príliš veľa priestoru. Aktuálne zaberajú :disk_usage, čo je viac ako povolený limit :disk_limit.',
    'unhealthy_backup_found_not_reachable'  => 'Priečinok so zálohami nie je dostupný. :error',
    'unhealthy_backup_found_old'            => 'Posledná záloha z :date je príliš stará.',
    'unhealthy_backup_found_subject'        => 'Dôležité: Zálohy :application_name sú poškodené',
    'unhealthy_backup_found_subject_title'  => 'Dôležité: Zálohy :application_name sú poškodené. :problem',
    'unhealthy_backup_found_unknown'        => 'Prepáč, presný dôvod nebolo možné zistiť.',
];