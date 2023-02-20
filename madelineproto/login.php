<?php

use danog\MadelineProto\API;
use danog\MadelineProto\Settings;
use danog\MadelineProto\Settings\AppInfo;

require 'vendor\autoload.php';

$settings = new Settings;

$settings->setAppInfo((new AppInfo)
    ->setApiId(23263463)
    ->setApiHash('39e86673bed6d227ccfd2ceeb83f1c1a'));


$MadelineProto = new API('testssss.madeline', $settings);
$MadelineProto->start();
$me = $MadelineProto->get_self();

\danog\MadelineProto\Logger::log($me);
////$MadelineProto->botLogin('5735548126:AAFvsIbiMsOpOl6sIptg7Fi2b407TjJSQ68');
$MadelineProto->messages->sendMessage(['peer' => -805857943, 'message' => 'send from user account']);
