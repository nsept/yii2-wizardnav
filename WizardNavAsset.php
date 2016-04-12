<?php

namespace nsept\wizardnav;

use yii\web\AssetBundle;

class WizardNavAsset extends AssetBundle
{
    public $sourcePath = '@nsept/wizardnav/assets';

    public $css = [
        'css/wizardnav.min.css'
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
