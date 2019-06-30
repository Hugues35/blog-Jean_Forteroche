<?php

include_once '_classes/Messages.php';
include_once '_classes/Chapters.php';
include_once '_classes/Admin.php';

$allMessages = Messages::getAllMessages();
$lastMessage = Messages::getLastMessage(1);


