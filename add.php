<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
echo "test";
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$ch=-1222258609;
$u='@lewisgarden';
$Updates = $MadelineProto->channels->inviteToChannel(['channel' => $ch, 'users' => [$u], ]); 
echo "done";
echo $Updates;
?>