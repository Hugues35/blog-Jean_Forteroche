<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php '?>
    <title>Connection</title>
</head>

<body>

<div class="container">

    <?php include_once 'views/includes/header.php '?>

 <section id="about" class="container-fluid">
    <div class="col-8 col-lg-4 profile-picture">  
    </div>
    <div class="heading">
    </div>
</section>

<section id="home-body-chapter">
    <div class="container">
    
        <div class="row">
            <div id="chapter-container" class="col-md-12">

                <div class="connexion-block">
                    <div class="mt-50"></div>
                    <i class="fas fa-user-cog"></i>
                    <div class="mt-20"></div>
                    <h2>Connection administrateur</h2>
                    <div class="mt-100"></div>

                    <!-- Si connecté, affichage du formulaire -->
                    <?php
                    if(!isset($_SESSION['connect'])){
                    ?>
                        <div id="form">
                            <form method="POST" action="">
                                <table>
                                    <tr>
                                        <td>Identifiant</td>
                                        <td><input type="text" name="username" placeholder="Identifiant" required></td>
                                    </tr>
                                    <tr>
                                        <td>Mot de passe</td>
                                        <td><input type="password" name="password" placeholder="Mot de passe" required ></td>
                                    </tr>
                                </table>
                                <div class="mt-20"></div>
                                <p><label><input type="checkbox" name="connect" checked> Connexion automatique</label></p>
                                <div id="button">
                                    <button type="submit" name="btnConnexion">Connexion</button>
                                </div>
                            </form>
                        </div>

                    <?php } else{ ?>
                        <p id="confirm_connect"><?= $_SESSION['adminUser'] ?> , vous êtes connecté <i class="far fa-thumbs-up"></i></p>
                        <div class="mt-20"></div>
                        <a href="disconnection_view.php">Déconnexion</a>
                    <?php } ?>

                    <?php
                        if(isset($_GET['error'])){
                            echo'<p id="error">Erreur authentification</p>';
                        }
                        else if(isset($_GET['success'])){
                            echo'<p id="success">Connection établie !</p>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


    <?php include_once 'views/includes/footer.php '?>

</body>
</html>
