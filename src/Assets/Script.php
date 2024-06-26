<?php

namespace Quagga\Quagga\Assets;

use Quagga\Contracts\Assets\AssetConstract;
use Quagga\Contracts\Assets\AssetHtmlConstract;
use Quagga\Contracts\Assets\AssetScriptConstract;
use Quagga\Quagga\Asset;
use App\Traits\AssetScriptTrait;

class Script extends Asset implements AssetHtmlConstract, AssetScriptConstract
{
    use AssetScriptTrait;

    public function renderHtml()
    {
        parent::renderHtml();
    }
}
