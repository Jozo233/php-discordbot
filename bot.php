<?php

include __DIR__.'/vendor/autoload.php';

use Discord\Discord;
use Discord\Parts\Channel\Message;
use Discord\WebSockets\Event;

$loop = Factory::create();
$browser = new Browser($loop);

$discord = new Discord([
    'token' => 'bot-token',
    'loop' => $loop,
]);



$discord->run();