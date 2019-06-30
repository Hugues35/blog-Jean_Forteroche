<?php

include_once '_classes/Chapters.php';
include_once '_classes/Messages.php';


if(!empty($_POST) && isset($_POST['buttonValue'])) {
    $id = $_POST['buttonValue'];
    Messages::addSignalement($id);
}
/*else{
	$error = "Une erreur s'est produite. Essayez à nouveau !";
}*/
