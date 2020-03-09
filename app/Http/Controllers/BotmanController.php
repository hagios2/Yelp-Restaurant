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

            if ($message == 'hi' || 'hello') {

                $this->askName($botman);

            }else if($message == ''){

                $botman->reply("I can be of help if you tell me what you want");

            } else if ($message == '')
            {
                $botman->reply("write 'hi' for testing...");
            }

  
        });


        $botman->hears('{message}', function($botman, $message) {

            if ($message == 'Goodbye') {

               $botman->reply('Alright, have a nice day');

            }else if($message == ''){

                $botman->reply("I can be of help if you tell me what you want");

            } else if ($message == '')
            {
                $botman->reply("write 'hi' for testing...");
            }

  
        });


       


        $botman->hears('I want {message}', function($botman, $message){

            $botman->reply('Kindly scroll up to the top of the page and search for '. $message . 'in the search bar');

        });
/* 
        $botman->hears('am here', function($botman){

            $botman->reply('where exactly');
        }); */


        $botman->fallback(function($botman) {
            
            $botman->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
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


}
