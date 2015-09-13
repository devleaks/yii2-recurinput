<?php

namespace devleaks\recurinput;

use yii\web\AssetBundle;

class RecurInputAsset extends AssetBundle
{
   public $js = [
        'js/recurinput.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
		'devleaks\recurinput\RRuleAsset'
    ]; 
}
