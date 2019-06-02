<?php

// Récupération de la classe
include_once '_classes/admin.php';
$allAdminUsers = Admin::getAllAdminUsers();


// Formulaire connection
if(!empty($_POST) && isset($_POST['btnConnexion'])){
    if(isset($_POST['username']) && isset($_POST['password'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            
            $username = str_secur($_POST['username']);
            $password = str_secur($_POST['password']);          
   
            // Comparaison des données envoyées par le formulaire avec la base
            if ($username = $allAdminUsers[0][1] && $password = $allAdminUsers[0][2]){
                session_start();
                //$_SESSION['id'] = $allAdminUsers['id'];
                $_SESSION['adminUser'] = $allAdminUsers[0][1];
                echo 'Vous êtes connecté !';

                if(isset($_POST['connect'])) {
                setcookie('log', $allAdminUsers[0][1], time() + 365*24*3600, '/', null, false, true);
            }
                
            }
            else {
                echo 'Mauvais identifiant ou mot de passe !';
            }
            
        }else{
            $error = "Vous devez remplir tous les champs !";
        }
    }else{
        $error = "Une erreur s'est produite. Essayez à nouveau !";
    }
}

