<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use BotMan\BotMan\BotMan;

use BotMan\BotMan\Messages\Incoming\Answer;

  

class BotmanController extends Controller
{
    //

    public function handle()

    {

        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message) {

            if ($message == 'hi') {

                $this->askName($botman);

            }else if($message == ''){

                $botman->reply("write 'hi' for testing...");

            } else if ($message == '')
            {
                $botman->reply("write 'hi' for testing...");
            }

  
        });


        $botman->fallback(function($bot) {
            $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
        });

  

        $botman->listen();

    }

  

    /**

     * Place your BotMan logic here.

     */

    public function askName($botman)

    {

        $botman->ask('Hello! What is your Name?', function(Answer $answer) {

            $name = $answer->getText();

  

            $this->say('Nice to meet you '.$name);

        });

    }




    public function askHome($botman)

    {

        $botman->ask('Hello! What is your Name?', function(Answer $answer) {

            $name = $answer->getText();

  

            $this->say('Nice to meet you '.$name);

        });

    }
}
