<!-- <?php    session_start();  ?>  à traiter pour contrôle connexion -->

    <!doctype html>
    <html lang="en">

    <head>
        <title>Ecuries de Camille</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>

        <main role="main">

            <?php include('partials/jumbotron.php') ?>

            <div class="album py-5 bg-light">

                <div class="container">

                    <div class="row">

                        <div class="card col-md-4 mb-4">
                            <h5 class="card-header">Nos chevaux</h5>
                            <div class="card-body">
                                <!-- <h5 class="card-title">titre</h5> -->
                                <p class="card-text">Tous nos chevaux sont hébergés dans des écuries nettoyées quotidiennement.</br>
                                    Leurs soins sont assurés par notre vétérinaire <a href="#">Solange</a>.</br>
                                    Ils sont régulièrement entrainés par les cavaliers.
                                </p>
                                <a href="listeHorse.php" class="btn btn-primary">Liste</a>
                                <a href="formCreateHorse.php" class="btn btn-secondary">Ajouter</a>
                            </div>
                        </div>

                        <div class="card col-md-4 mb-4">
                            <h5 class="card-header">Nos cavaliers</h5>
                            <div class="card-body">
                                <!-- <h5 class="card-title">titre</h5> -->
                                <p class="card-text">Nos cavaliers sont les élèves des cours d'équitation délivrés par <a href="#">Sophie</a>.</br>
                                    Chaque cavalier choisit un cheval selon ses préférences.</br>
                                    Les cours permettent aux cavaliers qui le désirent de valider leur qualification : galop 1 à galop 7.</p>
                                <a href="listeJockey.php" class="btn btn-primary">Liste</a>
                                <a href="formCreateJockey.php" class="btn btn-secondary">Ajouter</a>
                            </div>
                        </div>

                        <div class="card col-md-4 mb-4">
                            <h5 class="card-header">Notre équipe</h5>
                            <div class="card-body">
                                <!-- <h5 class="card-title">titre</h5> -->
                                <p class="card-text">
                                    Nos écuries sont gérées par <a href="#">Camille</a> qui a constitué une équipe de professionnels compétents.</br>
                                    Nos intervenants sont tous certifiés par la <a href="#">Fédération Nationale Du Cheval</a>.</br>
                                    Ils sont disponibles sur les horaires d'ouverture au public.
                                </p>
                                <a href="listeStaff.php" class="btn btn-primary">Liste</a>
                                <a href="formCreateStaff.php" class="btn btn-secondary">Ajouter</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </main>

        <?php include('partials/footer.php') ?>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>

    </body>

    </html>