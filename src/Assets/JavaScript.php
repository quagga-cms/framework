<?php

namespace Quagga\Quagga\Assets;

use Quagga\Contracts\Assets\AssetScriptConstract;
use Quagga\Quagga\Env;
use Quagga\Quagga\ExternalAsset;
use Quagga\Quagga\HookManager;
use App\Traits\AssetScriptTrait;

class JavaScript extends ExternalAsset implements AssetScriptConstract
{
    use AssetScriptTrait;

    public function renderHtml()
    {
        echo HookManager::applyFilters(
            'print_js_html',
            sprintf(
                '<script id="%2$s-js" src="%1$s"></script>',
                HookManager::applyFilters("asset_js_url", $this->getUrl(
                    Env::get("COMPRESSED_ASSETS", Env::get("DEBUG") === false)
                ), $this->id, $this),
                $this->id
            ),
            $this->getId(),
            $this
        );

        parent::renderHtml();
    }
}
