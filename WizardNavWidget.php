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
        $this->widget->options['class'].= ' nav-wizard';
        return $this->widget->run();
    }
}
