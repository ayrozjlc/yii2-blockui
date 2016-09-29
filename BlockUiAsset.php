<?php
namespace ayrozjlc\blockui;

use yii\web\AssetBundle;

class BlockUiAsset extends AssetBundle
{
    public $sourcePath = '@bower/blockui';
    public $js = [
        'jquery.blockUI.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}