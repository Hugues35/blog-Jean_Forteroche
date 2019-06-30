<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "includes/head.php" ?>
    <title>Modification chapitres</title>
</head>

<body>
    <?php include_once "includes/header.php" ?>

    <section id="about" class="container-fluid">
        <div class="col-8 col-lg-4 profile-picture">
        </div>
        <div class="heading">
        </div>
    </section>

    <section id="home-body-chapter">
        <div class="container">

            <div class="row">

                <div id="chapters-admin-container" class="col-md-12">
                    <div class="chapter-block">

                        <?php if (!isset($_SESSION['admin'])): ?>

                             <div style="color:red;font-weight: bold"><p>Page inaccessible, connnectez-vous en tant qu'administateur.</p></div>
                        
                        <?php else: ?>
                    
                                <div class="mt-20"></div>
                                <h3><i class="fas fa-cut"></i></h3>
                                <div class="mt-20"></div>
                                <h3>Modification du contenu des chapitres</h3>

                                <?php if (isset($error)): ?>
                                    <span style="color:red">Erreur : <?= $error ?></span>
                                <?php endif; ?>
                               
                                    <form action="./modifychapter" method="post">
                                        <div class="mt-50"></div>
                                        <input class="form-control" name="newcategory" id="admin-category" rows="8" value="<?= $chapter->getCategory() ?>">
                                        <div class="mt-50"></div>
                                        <div class="summary-block">
                                            <textarea class="form-control" name="newstory" id="admin-story" rows="8" ><?= $chapter->getStory() ?></textarea>
                                        </div>
                                        <input type="hidden" name="id" value="<?= $chapter->getId(); ?>">
                                        <button name="buttonModifchapter" type="submit" value="<?= $chapter->getId(); ?>">Mettre à jour</button>
                                    </form>
                                    
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once "includes/footer.php" ?>

</body>
</html>