<?php

namespace App\Datagrids\Actions;

/**
 * Groups heavily restrict options because they aren't entities.
 */
class GroupDatagridActions extends DatagridActions
{
    public $bulkPermissions = false;
    public $bulkCopyToCampaign = false;
    public $bulkPrint = false;
    public $bulkTransform = false;
    public $bulkTemplate = false;
}
