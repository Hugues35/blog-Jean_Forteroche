<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once "includes/head.php" ?>
    <title>Billet simple pour l'Alaska</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <?php include_once "includes/header.php" ?>

    <section id="about" class="container-fluid">
        <div class="col-8 col-lg-4 profile-picture">  
        </div>
        <div class="heading">
            <h1>Mon blog</h1>
            <h3><span>Jean Forteroche </span>Billet simple pour l'Alaska  <i class="fas fa-feather-alt"></i></h3>
        </div>
    </section>

    <section id="home-body">
        <div class="container">    
            <div class="row">
                <div class="col-md-12">
                    <div class="alert-block">

                        <?php if (!isset($_SESSION['admin'])): ?>
                             <div style="color:red;font-weight: bold"><p>Page inaccessible, connnectez-vous en tant qu'administateur.</p></div>
                        
                        <?php else: ?>
                            <div class="mt-20"></div>
                            <div style="color:green;font-weight: bold">Ce chapitre <?php echo $id ?> a bien été modifié !</div>
                            <div class="mt-20"></div>
                            <a href="./chaptersadmin">Retour aux chapitres</a>
                            
                        <?php endif; ?>
                    </div>
                </div>                
            </div>
        </div>             
    </section>

    <?php include_once "includes/footer.php" ?>

</body>
</html>