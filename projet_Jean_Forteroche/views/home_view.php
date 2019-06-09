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

                <!--<div class="col-md-6">
                    <div class="chapterextract-block">
                        <h4>Chapitre 1</h4>
                        <h3>"Grande terre"</h3>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-20"></div>                  
                        <h5>Dernier commentaire</h5>
                        <div class="mt-20"></div>
                        <div class="red-divider"></div>                          
                        <p class="chapter-com-message"><i class="far fa-comment"></i><?= substr($lastMessage['message'],0,50)?></p><a href=".chapter1.php?num=<?php echo ($lastMessage[0]);?>">(lire la suite)</a>
                        <p class="chapter-com-date-pseudo"><i class="far fa-calendar-alt"></i><?= date_format(date_create($lastMessage['date']), "d/m/Y H:i")?><i class="fas fa-user"></i><?= $lastMessage['pseudo']?></p>
                        <div class="mt-50"></div>                        
                        <p class="chapter-com-link"><a href="./chapter1"><i class="far fa-hand-point-right"></i>Suite des commentaires...</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="chapterextract-block">
                        <h4>Chapitre 2</h4>
                        <h3>"Kodiak la sauvage"</h3>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-20"></div>                   
                        <h5>Dernier commentaire</h5>
                        <div class="mt-20"></div>
                        <div class="red-divider"></div>                          
                        <p class="chapter-com-message"><i class="far fa-comment"></i><?= substr($lastMessage['message'],0,50)?></p>
                        <p class="chapter-com-date-pseudo"><i class="far fa-calendar-alt"></i><?= date_format(date_create($lastMessage['date']), "d/m/Y H:i")?><i class="fas fa-user"></i><?= $lastMessage['pseudo']?></p> 
                        <div class="mt-50"></div>                          
                        <p class="chapter-com-link"><a href="./chapter1"><i class="far fa-hand-point-right"></i>Suite des commentaires...</a></p>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="chapterextract-block">
                        <h4>Chapitre 3</h4>
                        <h3>"Les filles de l’air"</h3>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-20"></div>                  
                        <h5>Dernier commentaire</h5>
                        <div class="mt-20"></div>
                        <div class="red-divider"></div>                          
                        <p class="chapter-com-message"><i class="far fa-comment"></i><?= substr($lastMessage['message'],0,50)?></p>
                        <p class="chapter-com-date-pseudo"><i class="far fa-calendar-alt"></i><?= date_format(date_create($lastMessage['date']), "d/m/Y H:i")?><i class="fas fa-user"></i><?= $lastMessage['pseudo']?></p>
                        <div class="mt-50"></div>                           
                        <p class="chapter-com-link"><a href="./chapter1"><i class="far fa-hand-point-right"></i>Suite des commentaires...</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="chapterextract-block">
                        <h4>Chapitre 4</h4>
                        <h3>"La dernière frontière"</h3>
                        <span><i class="fas fa-feather-alt"></i></span>
                        <div class="mt-20"></div>                   
                        <h5>Dernier commentaire</h5>
                        <div class="mt-20"></div>
                        <div class="red-divider"></div>                          
                        <p class="chapter-com-message"><i class="far fa-comment"></i><?= substr($lastMessage['message'],0,50)?></p>
                        <p class="chapter-com-date-pseudo"><i class="far fa-calendar-alt"></i><?= date_format(date_create($lastMessage['date']), "d/m/Y H:i")?><i class="fas fa-user"></i><?= $lastMessage['pseudo']?></p>
                        <div class="mt-50"></div>                        
                        <p class="chapter-com-link"><a href="./chapter1"><i class="far fa-hand-point-right"></i>Suite des commentaires...</a></p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="summary-block">
                        <h4>Formulaire</h4>
                        <div class="summary-block">
                            <form method="post">
                                <textarea id="textarea">Hello, World!</textarea>
                            </form>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
              
    </section>

    <?php include_once 'views/includes/footer.php '?>

</body>
</html>
