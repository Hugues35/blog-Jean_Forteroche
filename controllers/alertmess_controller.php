<?php

include_once '_classes/Chapters.php';
include_once '_classes/Messages.php';


$allMessages = Messages::getAllMessages();
$totalSignalements = Messages::getSignalement()

$signal = $_GET[$num];

// Envoi signalement message
if(!empty($_POST) && isset($_POST['btnSignal'])){

	$newTotal=$totalSignalements+1;

	$query = "INSERT INTO messages(signalements) VALUES(\"$newTotal\")";
            $requete = $db->prepare($query);
            $requete->execute(array($signalements));
            unset($_POST);
else{
	$error = "Une erreur s'est produite. Essayez à nouveau !";
}
}