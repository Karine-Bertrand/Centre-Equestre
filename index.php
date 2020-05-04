<?php include('partials/head.php') ?>

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
                        <!-- mode de connexion à gérer sur le projet final -->
                        <label for="formRole">Mode de connexion : </label>
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

<?php include('partials/script.php') ?>