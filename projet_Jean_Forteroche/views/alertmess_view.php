<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php '?>
    <title>Billet simple pour l'Alaska</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <?php include_once 'views/includes/header.php '?>

    <section id="about" class="container-fluid">
        <div class="col-8 col-lg-4 profile-picture">  
        </div>
        <div class="heading">
            <h1>Mon blog</h1>
            <h3><span>Jean Forteroche </span>Billet simple pour l'Alaska  <i class="fas fa-feather-alt"></i></h3>
            <div class="mt-100"></div>
            <h4>Bienvenue ami lecteur !</h4>
        </div>
    </section>

    <section id="home-body">
        <div class="container">
        
            <div class="row">

                <div class="col-md-12">
                    <div class="alert-block">
                        <div class="mt-20"></div>
                        <div style="color:green;font-weight: bold">Votre signalement nous a bien été transmis.</div>
                        <div class="mt-20"></div>
                        <p>Nous vous remercions.</p>
                        <p><i class="fas fa-user-cog"></i>L'administrateur du site.</p>  
                    </div>
                </div>                
            </div>
        </div>

        <div class="container">
        
            <div class="row">

                <div class="col-md-12">
                    <div class="chapter-block">
                        
                        <h3>Sommaire</h3>
                        <div class="mt-20"></div>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-20"></div>
                        <ul class="chapters-summary">
                            <?php $chapters = Chapters::getAllChapters() ?>
                                <?php foreach ($chapters as $oneChapter): ?>
                                    <li><a class="chapter-link" href="chapters?chapitreActuel=<?= $oneChapter['id'] ?>" title="<?= $oneChapter['category'] ?>"><?= $oneChapter['category'] ?></a></li>
                                <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
              
    </section>

    <?php include_once 'views/includes/footer.php '?>

</body>
</html>