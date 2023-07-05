<!-- SCRIPT PHP -->
<?php
    // IMPORTO FUNCTIONS.PHP
    require __DIR__."/functions.php";

    // AVVIO LA SESSIONE
    session_start();

    // RECUPERO PASSWORD_LENGTH
    $passwordLength = $_SESSION['password-length'];

    // RICHIAMO LA FUNZIONE CHE GENERA UNA PASSWORD RANDOM PASSANDO COME PARAMETRO: PASSWORD_LENGTH, E INSERISCO IL RISULTATO DENTRO PASSWORD
    $password = randomPassword($passwordLength);
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
                            <h3>
                                <?php echo $password ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Fine Main -->
    </body>
</html>
