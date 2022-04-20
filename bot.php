<?php

include __DIR__.'/vendor/autoload.php';

use Discord\Discord;
use Discord\Parts\Channel\Message;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\EventLoop\Factory;

$loop = Factory::create();
$browser = new Browser($loop);

$discord = new Discord([
    'token' => 'bot-token',
    'loop' => $loop,
]);

$discord->on('message', function(Message $message, Discord $discord) use ($browser) {
    if (strtolower($message->content) == '.help') {
        $message->reply('.help, .creator, .cringe');
    }
})

$discord->on('message', function(Message $message, Discord $discord) use ($browser) {
    if (strtolower($message->content) == '.creator') {
        $message->reply('Jozo_85');
    }
})

$discord->on('message', function(Message $message, Discord $discord) use ($browser) {
    if (strtolower($message->content) == '.cringe') {
        $message->reply('https://www.youtube.com/watch?v=cMciPwPWFcA');
    }
})


$discord->run();