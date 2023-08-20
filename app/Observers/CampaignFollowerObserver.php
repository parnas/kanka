<?php

namespace App\Observers;

use App\Facades\UserCache;
use App\Models\CampaignFollower;

class CampaignFollowerObserver
{
    /**
     * @param CampaignFollower $campaignFollower
     */
    public function created(CampaignFollower $campaignFollower)
    {
        UserCache::clear();
        $campaignFollower->campaign->follower++;
        $campaignFollower->campaign->save();
    }

    /**
     * @param CampaignFollower $campaignFollower
     */
    public function deleted(CampaignFollower $campaignFollower)
    {
        UserCache::clear();
        $campaignFollower->campaign->follower--;
        $campaignFollower->campaign->save();
    }
}
