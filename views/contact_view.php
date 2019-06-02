<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php '?>
    <title>Contact</title>
</head>

<body>

    <?php include_once 'views/includes/header.php '?>

    <section id="home-body-contact">
        <div class="container">     
            <div class="row">
                <div id="contact-container" class="col-md-12">

                    <img src="assets/images/ecrivain.jpg" alt="Jean Forteroche" />
                    <div class="mt-20"></div>
                    <h1>Contactez-moi</h1>
                    <div class="mt-20"></div>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Prénom</label>
                            <input type="text" name="firstname" class="form-control" id="exampleFormControlSelect2" placeholder="Prénom">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="8" placeholder="Mon message..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2" name="btnContact">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include_once 'views/includes/footer.php '?>

</body>
</html>
