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

    <?php include('partials/navbar.php') ?>

    <main role="main">

        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <h1>Nouveau pensionnaire</h1>
                    <form action="createHorse.php" method="post" class="form" enctype="multipart/form-data">

                        <div class="form-group">

                            <label for="formName">Nom du cheval</label>
                            <input name="nom" id="formName" type="text" class="form-control" required>

                            <label for="formRace">Race</label>
                            <select name="race" id="formRace" class="form-control">
                                <option value=""></option>
                                <option value="Paint Horse">Paint Horse</option>
                                <option value="Barbe">Barbe</option>
                                <option value="Pur Sang">Pur Sang</option>
                                <option value="Selle Française">Selle Française</option>
                                <option value="KWPN">KWPN</option>
                                <option value="Appaloosa">Appaloosa</option>
                                <option value="Frison">Frison</option>
                                <option value="Shire">Shire</option>
                                <option value="Cob">Cob</option>
                            </select>


                            <label for="formSexe">Sexe</label>
                            <select name="sexe" id="formSexe" class="form-control">
                                <option value=""></option>
                                <option value="0">mâle</option>
                                <option value="1">femelle</option>
                                <option value="2">non déterminé</option>
                            </select>

                            <label for="formPoids">Poids (en kg)</label>
                            <input name="poids" id="formPoids" type="number" class="form-control" min="45" max="1500">

                            <label for="formTaille">Taille (en cm)</label>
                            <input name="taille" id="formTaille" type="number" class="form-control" min="80" max="220">

                            <label for="formImage">Selectionner une image</label>
                            <input name="photo" id="formImage" type="file" class="form-control">
                        </div>

                        <input class="btn btn-primary" type="submit" value="Valider">
                        <a href="accueil.php" class="btn btn-secondary" type="submit">Annuler</a>

                    </form>
                </div>
            </div>
        </div>


    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>