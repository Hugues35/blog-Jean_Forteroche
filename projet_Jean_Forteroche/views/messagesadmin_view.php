<!DOCTYPE html>
<html lang="fr">
<head>

    <?php include_once "includes/head.php" ?>
    <title>Administration messages</title>
</head>

<body>

    <?php include_once "includes/header.php" ?>

    <section id="about" class="container-fluid">
        <div class="col-8 col-lg-4 profile-picture"></div>
        <div class="heading"></div>
    </section>

    <section id="home-body-chapter">
        <div class="container">

            <div class="row">

                <div id="chapter-container" class="col-md-12">
                    <div class="messagesadmin-block">

                        <?php if (!isset($_SESSION['admin'])): ?>

                            <div style="color:red;font-weight: bold"><p>Page inaccessible, connnectez-vous en tant
                                    qu'administateur.</p></div>

                        <?php else: ?>

                            <main role="main" class="container">
                                <div class="mt-50"></div>
                                <h3><i class="fas fa-user-cog"></i></h3>
                                <div class="mt-50"></div>
                                <h3>Gestion de tous les commentaires</h3>
                                <div class="mt-50"></div>

                                <?php foreach ($allMessages as $index1 => $allarticles): ?>

                                    <form method="POST" action="./modifymess">
                                        <p class="chapter-com-message">Numéro : <?= $allarticles['id'] ?>
                                            <i class="far fa-calendar-alt"></i><?= date_format(date_create($allarticles['date']), "d/m/Y H:i") ?>
                                            <i class="fas fa-user"></i><?= $allarticles['pseudo'] ?><i
                                                    class="fas fa-bell"></i><?= $allarticles['signalements'] ?></p>
                                        <label><i class="far fa-comment"></i></label>
                                        <input type="text" class="contentarea"
                                               name="contentmess-admin"
                                               value="<?php echo($allarticles[3]); ?>">
                                        <input type="hidden" name="id" value="<?= $allarticles['id'] ?>">
                                        <button name="buttonModify"
                                                type="submit">Mettre à jour</button>
                                    </form>

                                    <form method="POST" action="./deletemess">
                                        <button id="buttonDelete" name="buttonDelete" type="submit"
                                                title="Suppression de ce message" value="<?= $allarticles[0] ?>"><i
                                                class="fas fa-trash-alt"></i></button>
                                        <div class="mt-20"></div>
                                        <div class="red-divider"></div>
                                        <div class="mt-20"></div>
                                    </form>

                                <?php endforeach; ?>

                            </main>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once "includes/footer.php" ?>

</body>
</html>
