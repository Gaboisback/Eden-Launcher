<?php
$instance['test'] = array_merge($instance['test'], array(
    "loadder" => array(
        "minecraft_version" => "1.19.2",
        "loadder_type" => "Fabric",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Edensafio",
        "ip" => "mc.hypixel.net",
        "port" => 25565
    )
