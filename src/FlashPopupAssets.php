<?php

namespace xililo\SearchableAjaxSelect;

use yii\web\AssetBundle;

class FlashPopupAssets extends AssetBundle
{
    public $sourcePath = '@vendor/xililo/flash-popup-widget/src/assets';
    public $js = [
        'popalert-js.js',
    ];
    public $css = [
        'popalert-js.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}