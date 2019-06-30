<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "includes/head.php"?>
    <title>Billet simple pour l'Alaska</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <?php include_once "includes/header.php"?>

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
                    <div class="presentation-block">
                        <h2>A propos</h2>
                        <div class="mt-20"></div>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-20"></div>
                        <p>Depuis quelques temps maintenant, j'ai commencé l'écriture de mon nouveau roman</p><p>"Billet simple pour l'Alaska".</p>
                        <p>Je publie ce roman par chapitre directement sur ce blog, vous faisant ainsi découvrir celui-ci en avant première.</p>
                        <p>N'hésitez pas à laisser un commentaire pour partager vos réactions.</p>
                        <p>Merci à tous. Bonne lecture.</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="portrait-block">
                        <img src="assets/images/jean_forteroche.jpg" alt="Jean Forteroche" />
                        <div class="mt-20"></div>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-20"></div>
                        <p>Je m'appelle Jean Forteroche, je suis acteur et écrivain.</p>
                        <p>Robit darijte imenijt tut ti, gaz materju gotovenie do. Li videnie sluzxba glubinju gaz. Plus scxastju kak da, na eda hvala pomocit. Vi tut glosuf volapukio. Ja tut roksana volapukio, sam ja riba tvoi cxesajm.
                        Ja cenit razlicxju oni, pesna vsektor uzx mi. Des despiat odevijm da, bi divaj esxte vsezem gda. Es ona okno cxai vozifs. Tenis jazikas ku tri, vo razumju roksana pomocijsx mai. Den ogen cxetkajm bi, polka srbzem vo tak. Pesok miakju bi sos, sam iz zvezd blagodarim.
                        </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="summary-block">
                        <img src="assets/images/billet_simple_pour_l_alaska.jpg" alt="Bille simple pour l'Alaska" />
                        <div class="mt-20"></div>
                        <div class="mt-20"></div>
                        <p>"Ces courts chapitres, musclés et musicaux, enfiévrés de forêts, de végétation et d’étranges animaux, pourraient même être autant de courts récits, traversant le temps en énigmatiques flash-back.</p>
                        <p>Marc Levis"</p>
                        <div class="mt-20"></div>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-20"></div>
                        <h3>Sommaire</h3>
                        <div class="mt-20"></div>
                        <ul class="chapters-summary">
                            <?php $chapters = Chapters::getAllChapters() ?>
                                <?php foreach ($chapters as $oneChapter): ?>
                                    <li><a class="chapter-link" href="chapters?chapitreActuel=<?= $oneChapter['id'] ?>" title="<?= $oneChapter['category'] ?>"><i class="fas fa-link"></i><?= $oneChapter['category'] ?></a></li>
                                <?php endforeach; ?>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
              
    </section>

    <?php include_once "includes/footer.php"?>

</body>
</html>
