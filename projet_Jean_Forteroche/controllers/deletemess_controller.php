<?php

// // Récupération chapitre et messages
//include_once '_classes/Chapters.php';
include_once '_classes/Messages.php';

// $chapter1 = Chapters::getAllChapters(1);
// $messChapt1 = Messages::getMessChapt1();
// $allMessages = Messages::getAllMessages();


$num=$_GET['num'];
$sql='DELETE FROM messages WHERE id =$num';
mysql_query($sql) or die ('erreur : '.mysql_error());



//$db->exec('DELETE FROM messages WHERE id =$num');
