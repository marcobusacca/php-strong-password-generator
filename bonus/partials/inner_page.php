<!-- SCRIPT PHP -->
<?php
    // AVVIO LA SESSIONE
    session_start();

    // IMPORTO FUNCTIONS.PHP
    require __DIR__."/functions.php";

    // CONTROLLO SE LA SESSIONE è VUOTA
    if (!empty($_SESSION)){
        
        // RECUPERO PASSWORD_LENGTH
        $passwordLength = $_SESSION['password-length'];

        // RECUPERO CHARACTES_RIPETITION
        $charactersRipetition = $_SESSION['characters-ripetition'] === 'true' ? true : false;

        // RICHIAMO LA FUNZIONE CHE GENERA UNA PASSWORD RANDOM PASSANDO COME PARAMETRO: PASSWORD_LENGTH, E INSERISCO IL RISULTATO DENTRO PASSWORD
        $password = randomPassword($passwordLength, $charactersRipetition);

        var_dump($_SESSION);
    }
?>

<!-- TEMPLATE HTML -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Head Title -->
        <title>php-strong-password-generator-bonus</title>
    </head>
    <body style="background-color: #001632">
        <!-- Main -->
        <main style="height: 100vh">
            <!-- Main Container -->
            <div class="container d-flex justifiy-content-center align-items-center h-100">
                <!-- Main Row -->
                <div class="row w-100">
                    <!-- Password Col -->
                    <div class="col-12 d-flex justify-content-center">
                        <!-- Password Content -->
                        <div class="password-content text-center bg-white rounded-3 p-5 w-50">
                            <h3 class="text-break">
                                <?php if (!empty($_SESSION)){
                                        // STAMPO LA PASSWORD GENERATA
                                        echo $password;

                                        // CHIUDO LA SESSIONE
                                        session_unset();
                                        session_destroy();
                                    } else{
                                        // REINDIRIZZO L'UTENTE ALLA PAGINA PRINCIPALE
                                        header('Location: ../index.php');
                                    }
                                ?>
                            </h3>
                        </div>
                    </div>
                    <!-- Redirect Col -->
                    <div class="col-12 text-center my-5">
                        <!-- Redirect -->
                        <a href="../index.php" class="text-decoration-none text-white fs-3">Torna alla pagina principale</a>
                    </div>
                </div>
            </div>
        </main>
        <!-- Fine Main -->
    </body>
</html>
