<?php

// Récupération chapitre et messages
include_once '_classes/Messages.php';

if(!empty($_POST) && isset($_POST['buttonDelete'])) {
	$idDelete = $_POST['buttonDelete'];
	Messages::deleteMessage($idDelete);
}
