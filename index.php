<!doctype html>
<html lang="en">

<head>
    <title>Identification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <main role="main">

        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <h1>Connectez-vous :</h1>
                    <form action="login.php" method="post" class="form">

                        <div class="form-group">
                            <label for="formEmail">Adresse e-mail</label>
                            <input name="email" id="formEmail" type="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="formPwd">Mot de passe</label>
                            <input name="pwd" id="formPwd" type="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="formRole">Mode de connexion :  </label>
                            <input name="role" type="radio" value="visiteur" checked> visiteur  
                            <input name="role" type="radio" value="staff"> personnel  
                            <input name="role" type="radio" value="admin"> administrateur  
                        </div>

                        <input class="btn btn-primary" type="submit" value="Valider">

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