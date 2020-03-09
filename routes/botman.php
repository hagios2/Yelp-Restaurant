<?php

$botman->hears('I want ([0-9]+)', function ($bot, $number) {
    $bot->reply('You will get: '.$number);
});




$botman->hears('My First Message', function ($bot) {
    $bot->reply('Your First Response');
});



$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
});