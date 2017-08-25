<?php

namespace Layouts\Clan2Columns\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'name' => "clan2columns",
        'version' => '1.0.0-beta.1',
        'author' => 'Tobias Schwarz',
        'link' => 'http://ilch.de',
        'desc' => '2 Spalten Clan Layout',
        'layouts' => [
            'index_full' => [
                ['module' => 'user', 'controller' => 'panel'],
                ['module' => 'forum'],
            ]
        ],
    ];

    public function getUpdate($installedVersion)
    {

    }
}
