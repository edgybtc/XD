<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
echo "test";
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$ch='https://t.me/joinchat/G2J3wUjaL7Fo-CRz6sLsKQ';
$u='445';
$Updates = $MadelineProto->channels->inviteToChannel(['channel' => $ch, 'users' => [$u], ]); 
echo "done";
echo $Updates;
?>