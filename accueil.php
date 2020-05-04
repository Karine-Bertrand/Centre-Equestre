<!-- <?php session_start();  ?>  à traiter sur projet final pour contrôle connexion -->


<?php include('partials/head.php') ?>

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

<?php include('partials/script.php') ?>

