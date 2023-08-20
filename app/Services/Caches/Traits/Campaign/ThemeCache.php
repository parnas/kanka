<?php

namespace App\Services\Caches\Traits\Campaign;

use App\Models\CampaignPlugin;

trait ThemeCache
{
    /**
     * List of theme plugins the campaign has activated
     * @return string|bool
     */
    public function themes(): string|bool
    {
        if (!config('marketplace.enabled')) {
            return false;
        }

        $key = $this->themeKey();
        if ($this->has($key)) {
            return (string) $this->get($key);
        }

        $theme = '';
        // @phpstan-ignore-next-line
        $plugins = CampaignPlugin::leftJoin('plugins as p', 'p.id', 'plugin_id')
            ->where('campaign_id', $this->campaign->id)
            ->where('p.type_id', 1)
            ->where('is_active', true)
            ->with('version')
            ->has('plugin')
            ->has('plugin.user')
            ->get();
        /** @var CampaignPlugin $plugin */
        foreach ($plugins as $plugin) {
            if ($plugin->version->fonts) {
                $theme .= "/** plugin: " . e($plugin->name) . " #" . e($plugin->version->version) . " fonts **/\n";
                $theme .= $plugin->version->fonts . "\n\n";
            }
        }
        foreach ($plugins as $plugin) {
            $theme .= "/** plugin: " . e($plugin->name) . " #" . e($plugin->version->version) . " code **/\n";
            $theme .= $plugin->version->content . "\n\n";
        }

        $this->forever($key, $theme);
        return (string) $theme;
    }

    public function clearTheme(): self
    {
        $this->forget(
            $this->themeKey()
        );
        return $this;
    }

    protected function themeKey(): string
    {
        return 'campaign_' . $this->campaign->id . '_theme';
    }
}
