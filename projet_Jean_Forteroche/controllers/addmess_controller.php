<?php

// Récupération 
include_once '_classes/Chapters.php';
include_once '_classes/Messages.php';

$chapter = new Chapters($_GET['chapitreActuel']);
if ($chapter->getId() === "Error") {
    echo "Attention : la page que vous cherchez n'existe pas !";
    exit();
}
$messChapt1 = Messages::getMessChapt($chapter->getId());
$allMessages = Messages::getAllMessages();


// Formulaire envoi nouveau message
if(!empty($_POST) && isset($_POST['btnMessage'])){
    if(isset($_POST['pseudo']) && isset($_POST['message'])){
        if(!empty($_POST['pseudo']) && !empty($_POST['message'])){

            $pseudo = str_secur($_POST['pseudo']);
            $message = str_secur($_POST['message']);
            $numeroDeChapitre = $chapter->getId();

            // Envoi d'un email
            //mail('huguesfleury35133@gmail.com', 'Nouveau message sur chapitre '.$numeroDeChapitre, $message);

            // Enregistrement des données dans la table "messages"
            $query = "INSERT INTO messages(pseudo, message, chapter_number) VALUES(\"$pseudo\", \"$message\", \"$numeroDeChapitre\")";
            $requete = $db->prepare($query);
            $requete->execute(array($pseudo, $message));
            $validation = 'Bonjour ' . $pseudo .'. Votre messsage a bien été ajouté. Merci !';
            sleep(1);
            unset($_POST);

        } else{
            $error = "Vous devez remplir tous les champs !";
        }
    }
    else{
        $error = "Une erreur s'est produite. Essayez à nouveau !";
    }
}
