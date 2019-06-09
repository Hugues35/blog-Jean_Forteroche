<?php

include_once '_classes/Chapters.php';
include_once '_classes/Messages.php';


$allMessages = Messages::getAllMessages();


// Envoi signalement message
if(!empty($_POST) && isset($_POST['btnSignal'])){

	$signal = $_GET[$num];
	$totalSignalements = Messages::getSignalement(6);

	$newTotal=$totalSignalements+1;

	$query = "INSERT INTO messages(signalements) WHERE id = $signal VALUES(\"$newTotal\")";
    $requete = $db->prepare($query);
    $requete->execute(array($newTotal));
    unset($_POST);

    // Envoi d'un mail
    //mail('huguesfleury35133@gmail.com', 'Alerte ! Signalement blog Jean Forteroche message numéro : ', $signal);

}

/*else{
	$error = "Une erreur s'est produite. Essayez à nouveau !";
}*/
