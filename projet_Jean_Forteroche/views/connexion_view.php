<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php ' ?>
    <title>Connection</title>
</head>

<body>

    <?php include_once 'views/includes/header.php ' ?>

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
                        <h2>Connexion administrateur</h2>
                        <div class="mt-100"></div>

                        <!-- Si connecté, affichage du formulaire -->
                        <?php if (!isset($_SESSION['admin'])): ?>
                            <div id="form">
                                <form method="POST" action="">
                                    <table>
                                        <tr>
                                            <td>Identifiant</td>
                                            <td><input type="text" name="username" placeholder="Identifiant" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mot de passe</td>
                                            <td><input type="password" name="password" placeholder="Mot de passe"
                                                       required></td>
                                        </tr>
                                    </table>
                                    <div class="mt-20"></div>
                                    <p><label><input type="checkbox" name="connect" checked> Connexion
                                            automatique</label></p>
                                    <div id="button">
                                        <button type="submit" name="btnConnexion" style="color:green">Connexion  &nbsp;<i class="fas fa-sign-in-alt"></i></button>
                                    </div>
                                </form>
                            </div>

                        <?php else: ?>
                            <p id="confirm_connect">Bonjour <?= $_SESSION['admin']['username'] ?> , vous êtes déjà
                                connecté &nbsp;<i class="far fa-thumbs-up"></i></p>
                            <div class="mt-50"></div>
                            <a id="chaptersadmin-btn" href="./chaptersadmin" title="Administration des chapitres">Administration des chapitres</a>
                            <div class="mt-50"></div>
                            <a id="messagesadmin-btn" href="./messagesadmin" title="Administration des messages">Administration des messages</a>
                            <div class="mt-50"></div>
                            <form method="POST" action="">
                                <button type="submit" name="btnDisconnec" style="color:red">Déconnexion &nbsp;<i class="fas fa-sign-out-alt"></i></button>
                            </form>
                        <?php endif; ?>

                        <?php if (isset($error)): ?>
                            <div class="mt-50"></div>
                            <p id="error" style="color:red"><?= $error ?></p>
                        <?php elseif (isset($success)): ?>
                            <div class="mt-50"></div>
                            <p id="success" style="color:green"><?= $success ?></p>
                            
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once 'views/includes/footer.php ' ?>

</body>
</html>
