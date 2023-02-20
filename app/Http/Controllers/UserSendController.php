<?php

namespace App\Http\Controllers;


use danog\MadelineProto\API;
use danog\MadelineProto\Logger;
use danog\MadelineProto\Settings;
use danog\MadelineProto\Settings\AppInfo;
require_once '../vendor/autoload.php';

use Illuminate\Http\Request;

class UserSendController extends Controller
{
    public function sendFromUserAccount(Request $request)
    {


        $settings = new Settings;

        $settings->setAppInfo((new AppInfo)
            ->setApiId(АПИ АЙДИ)
            ->setApiHash(АПИ ХЕШ));

        $MadelineProto = new API('tes.madeline', $settings);

       $MadelineProto->start();
///Do you want to login as user or bot (u/b)?
//
//Enter your phone number:
//
//Enter your code:

//        $me = $MadelineProto->getSelf();
//
//        \danog\MadelineProto\Logger::log($me);

//dd($me);

       // $MadelineProto->messages->sendMessage(['peer' => '@dasha_prog', 'message' => 'send from user account22']);
    }
}
