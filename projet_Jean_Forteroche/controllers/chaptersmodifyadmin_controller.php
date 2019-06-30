<?php

// Récupération 
include_once '_classes/Chapters.php';
include_once '_classes/Messages.php';

// Sélection du chapitre
$chapter = new Chapters($_GET['chapitreActuel']);
if ($chapter->getId() === "Error") {
    echo "Attention : la page que vous cherchez n'existe pas !";
    exit();
}
$messChapt1 = Messages::getMessChapt($chapter->getId());
$allMessages = Messages::getAllMessages();



