<?php

// Récupération 
include_once '_classes/Messages.php';

if(!empty($_POST) && isset($_POST['buttonModify'])) {
	$newmessage = $_POST['contentmess-admin'];
    $id = $_POST['id'];
	Messages::modifyMessage($id, $newmessage);
}
