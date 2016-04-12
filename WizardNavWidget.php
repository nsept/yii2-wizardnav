<?php

namespace nsept\wizardnav;

class WizardNavWidget extends \yiidreamteam\wizard\Menu
{
    public $registerAsset = true;

    public function init()
    {
        if($this->registerAsset) {
            WizardNavAsset::register($this->view);
        }

        parent::init();
    }

    public function run()
    {
        array_push($this->widget->options['class'], ' nav-wizard');
        return $this->widget->run();
    }
}
