<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php ' ?>
    <title>Chapitre1</title>
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

            <div id="chapters-admin-container" class="col-md-12">
                <div class="chapter-block">

                    <main role="main" class="container">
                        <div class="mt-50"></div>
                        <h3><i class="far fa-edit"></i></h3>
                        <div class="mt-20"></div>
                        <h3>Rédaction du contenu des chapitres</h3>
                        <div class="mt-50"></div>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-50"></div>

                        <?php if (isset($error)): ?>
                            <span style="color:red">Erreur : <?= $error ?></span>
                        <?php endif; ?>
                            
                        <form action="" method="post">

                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Auteur <i class="fas fa-user-cog"></i></label>
                                <input type="text" name="admin-author" class="form-control" id="admin-author"
                                       placeholder="Mon nom">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Titre du chapitre <i
                                            class="far fa-folder-open"></i></label>
                                <select class="form-control" name="admin-category" id="admin-category" rows="8">
                                    <!-- Lecture de chaque ligne du tableau -->
                                    <?php foreach ($allCategories as $value): ?>
                                        <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Contenu du chapitre <i class="fas fa-book"></i></label>
                                <textarea class="form-control" name="admin-story" id="admin-text" rows="8"
                                          placeholder="Histoire"></textarea>
                            </div>
                            <div class="mt-50"></div>
                            <button type="submit" class="btn btn-primary mb-2" name="btnChaptersAdmin">Envoyer</button>
                            <?php if (isset($validationAdmin)): ?>
                                <div style="color:green;font-weight: bold"><?= $validationAdmin ?></div>
                            <div><?= $text ?></div>
                            <?php endif; ?>
                        </form>

                    </main>
                </div>

            </div>

        </div>
    </div>
</section>


<?php include_once 'views/includes/footer.php ' ?>

</body>
</html>