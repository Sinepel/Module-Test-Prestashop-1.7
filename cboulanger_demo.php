<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

use CBoulanger\Utils\Hooks;

class CBoulanger_Demo extends Module
{
    public function __construct()
    {
        $this->name = 'cboulanger_demo';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Constantin Boulanger';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('CBOULANGER DEMO');
        $this->description = $this->l('PS 1.7 Demo module from constantin-boulanger.fr');
    }

    public function install()
    {
        if (parent::install() && $this->registerHook(Hooks::getHooks())) {
            return true;
        }

        return false;
    }

    public function hookHeader($params)
    {
        dump("hello");
    }
}
