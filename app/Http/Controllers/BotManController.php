<?php
namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    public function handle()
    {
        DriverManager::loadDriver(\BotMan\Drivers\Facebook\FacebookDriver::class);
        $config = [
            'facebook' => [
                'token' => env('FACEBOOK_TOKEN'),
                'verification' => env('FACEBOOK_VERIFICATION'),
            ]
        ];

        $botman = BotManFactory::create($config);

        require base_path('routes/botman.php');

        $botman->listen();
    }
}