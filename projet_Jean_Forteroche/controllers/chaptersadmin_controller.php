<?php

include_once '_classes/Chapters.php';
include_once '_classes/admin.php';


/*if (!isset($_SESSION['admin'])) {
    echo "Vous n'êtes pas autorisé.";
    exit();
}*/

// Formulaire ajout contenu d'un chapitre
if(!empty($_POST) && isset($_POST['btnChaptersAdmin'])){
    if(isset($_POST['admin-author']) && isset($_POST['admin-category']) && isset($_POST['admin-story'])){
        if(!empty($_POST['admin-author']) && !empty($_POST['admin-category']) && !empty($_POST['admin-story'])){
            
            $adminAuthor = str_secur($_POST['admin-author']);
            $adminStory = str_secur($_POST['admin-story']);
            $adminCategory = str_secur($_POST['admin-category']);

            // Enregistrements des données dans la table "chapters"
            $query = "INSERT INTO chapters(author, story, category) VALUES(\"$adminAuthor\", \"$adminStory\", \"$adminCategory\")";
            $requete = $db->prepare($query);
            $requete->execute(array($adminAuthor, $adminStory, $adminCategory));
            $validationAdmin = 'Bonjour ' . $adminAuthor .'. Le chapitre a bien été ajouté.';

            //Pour test
            $text = $adminAuthor . ' - ' . $adminCategory . ' - ' . $adminStory;

            sleep(1);
            unset($_POST);

        }else{
            $error = "Vous devez remplir tous les champs !";
        }
    }else{
        $error = "Une erreur s'est produite. Essayez à nouveau !";
    }
}