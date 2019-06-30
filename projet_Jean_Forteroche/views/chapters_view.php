<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "includes/head.php"?>
    <title>Chapitres</title>
</head>

<body>

    <?php include_once "includes/header.php"?>

    <section id="about" class="container-fluid">
        <div class="col-8 col-lg-4 profile-picture"></div>
        <div class="heading"></div>
    </section>

    <section id="home-body-chapter">
        <div class="container">

            <div class="row">

                <div id="chapter-container" class="col-md-12">
                    <div class="chapter-block">

                        <h3>Sommaire</h3>
                        <div class="mt-20"></div>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-20"></div>
                        <ul class="chapters-summary">
                            <?php $chapters = Chapters::getAllChapters() ?>
                            <?php foreach ($chapters as $oneChapter): ?>
                                <li><a class="chapter-link" href="chapters?chapitreActuel=<?= $oneChapter['id'] ?>"
                                       title="<?= $oneChapter['category'] ?>"><?= $oneChapter['category'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div id="chapter-container" class="col-md-12">
                    <div class="chapter-block">
                        <h2>Chapitre <?= $chapter->getId(); ?></h2>
                        <div class="mt-50"></div>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-50"></div>
                        <h2><?= $chapter->getCategory() ?></h2>
                        <div class="mt-50"></div>
                        <div class="summary-block">
                            <p><?= $chapter->getStory() ?></p>
                        </div>
                    </div>
                </div>

                <div id="chapter-container" class="col-md-12">
                    <div class="chapter-block">
                        <main role="main" class="container">
                            <h3><i class="far fa-edit"></i></h3>
                            <div class="mt-50"></div>
                            <h3>Faites moi part de vos commentaires</h3>
                            <div class="mt-50"></div>
                            <?php if (isset($error)): ?>
                                <span style="color:red">Erreur : <?= $error ?></span>
                            <?php endif; ?>
                            <form action="" method="post">

                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Pseudo <i class="fas fa-user"></i></label>
                                    <input type="text" name="pseudo" class="form-control" id="pseudo"
                                           placeholder="Mon pseudo">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message <i class="far fa-comment"></i></label>
                                    <textarea class="form-control" name="message" id="message" rows="8"
                                              placeholder="Mon message..."></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary mb-2" name="btnMessage">Envoyer mon message
                                </button>
                                <?php if (isset($validation)): ?>
                                    <div style="color:green;font-weight: bold"><?= $validation ?></div>
                                <?php endif; ?>
                            </form>
                        </main>
                    </div>
                </div>

                <div id="chapter-container" class="col-md-12">
                    <div class="chapter-block">

                        <main role="main" class="container">
                            <div class="mt-20"></div>
                            <h3><i class="far fa-comments"></i></h3>
                            <div class="mt-50"></div>
                            <h3>Tous les commentaires pour ce chapitre</h3>
                            <div class="mt-50"></div>

                            <form method="POST" action="./alertmess">
                                <?php foreach ($messChapt1 as $index => $article): ?>
                                    <p class="chapter-com-message">
                                        <i class="far fa-comment"></i><?= $article['message'] ?>
                                        <button name="buttonValue" type="submit" title="Signaler ce commentaire" value="<?= $article[0] ?>"><i class="far fa-bell"></i></button>
                                    </p>
                                    <p class="chapter-com-date-pseudo"><i class="far fa-calendar-alt"></i><?= date_format(date_create($article['date']), "d/m/Y H:i") ?><i class="fas fa-user"></i><?= $article['pseudo'] ?></p>
                                    <div class="mt-20"></div>
                                    <div class="red-divider"></div>
                                    <div class="mt-20"></div>

                                <?php endforeach; ?>
                            </form>
                        </main>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once "includes/footer.php"?>

</body>
</html>
