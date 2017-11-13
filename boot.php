<?php

$this->setProperty('author', 'Friends Of REDAXO');

if (rex::isBackend() && is_object(rex::getUser())) {
    rex_perm::register('demo_addon[]');
    rex_perm::register('demo_addon[config]');
}
if (rex::isBackend() && rex::getUser()) {

    rex_view::addCssFile($this->getAssetsUrl('css/style.css?v=' . $this->getVersion()));

    if (rex_be_controller::getCurrentPagePart(2) == 'config') {
        rex_view::addJsFile($this->getAssetsUrl('js/script.js?v=' . $this->getVersion()));
    }
}