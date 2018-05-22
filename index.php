<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$me = $MadelineProto->get_self();

\danog\MadelineProto\Logger::log($me);

if (!$me['bot']) {
    $MadelineProto->messages->sendMessage(['peer' => '@subex', 'message' => "love you! <3"]);
  

    try {
          $MadelineProto->messages->sendMessage(['peer' => '@subex', 'message' => "love you! <3"]);
    } catch (\danog\MadelineProto\RPCErrorException $e) {
    }

    
echo 'OK, done!'.PHP_EOL;