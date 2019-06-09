<?php

// // Récupération chapitre et messages
//include_once '_classes/Chapters.php';
//include_once '_classes/Messages.php';

// $chapter1 = Chapters::getAllChapters(1);
// $messChapt1 = Messages::getMessChapt1();
// $allMessages = Messages::getAllMessages();


$num=$_POST['num'];
$newmessage=$_POST['contentmess-admin'];
$sql="UPDATE messages WHERE id =$num SET message='$newmessage'";
mysql_query($sql) or die ('erreur : '.mysql_error(). ' requete='.$sql);

