<!-- SCRIPT PHP -->
<?php
    // CONTROLLO CHE LE VARIABILI DEL METODO GET NON SIANO Null o VALORI NON ACCETTATI
    if(isset($_GET['password-length']) && $_GET['password-length'] !== '' && $_GET['password-length'] > 0) {

        // RECUPERO PASSWORD_LENGTH
        $passwordLength = $_GET['password-length'];

        // DEFINISCO LA FUNZIONE CHE GENERA UNA PASSWORD RANDOM
        function randomPassword($maxLength) {

            // ELENCO CARATTERI (LETTERE MINUSCOLE, LETTERE MAIUSCOLE, NUMERI, SIMBOLI)
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';

            // LUNGHEZZA ELENCO CARATTERI
            $charactersLength = strlen($characters);

            // ARRAY CONTENENTE TUTTI I CARATTERI DELLA PASSWORD RANDOM GENERATA
            $password = [];

            // CICLO FOR CHE VA DA 1 ALLA PASSWORD_LENGTH SCELTA DALL'UTENTE
            for ($i = 1; $i <= $maxLength; $i++) {

                // NUMERO RANDOM CHE VA DA 1 ALLA LUNGHEZZA DELL'ELENCO CARATTERI
                $n = rand(1, $charactersLength);

                // USO IL NUMERO RANDOM COME INDICE PER L'ELENCO CARATTERI, ED INSERISCO IL CARATTERE RANDOM SELEZIONATO DENTRO L'ARRAY PASSWORD
                $password[] = $characters[$n-1];
            }

            // RITORNO L'ARRAY PASSWORD SOTTOFORMA DI STRINGA
            return implode($password);
        }

        // RICHIAMO LA FUNZIONE CHE GENERA UNA PASSWORD RANDOM PASSANDO COME PARAMETRO: PASSWORD_LENGTH, E INSERISCO IL RISULTATO DENTRO PASSWORD
        $password = randomPassword($passwordLength);
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
        <title>php-strong-password-generator</title>
    </head>
    <body style="background-color: #001632">
        <!-- Main -->
        <main>
            <!-- Main Container -->
            <div class="container my-5">
                <!-- Main Row -->
                <div class="row">
                    <!-- Title Col -->
                    <div class="col-12 text-center my-5">
                        <!-- First Title -->
                        <h1 class="text-secondary fw-bold">Strong Password Generator</h1>
                        <!-- Second Title -->
                        <h2 class="text-white fw-bold">Genera una password sicura</h2>
                    </div>
                    <!-- Form Col -->
                    <div class="col-12 d-flex justify-content-center">
                        <?php if(!isset($_GET['password-length']) || $_GET['password-length'] === '' || $_GET['password-length'] <= 0){ ?>
                            <!-- Form -->
                            <form action="index.php" method="GET" class="bg-white rounded-3 p-5 w-50">
                                <!-- Form Row -->
                                <div class="row align-items-center">
                                    <!-- Label Col -->
                                    <div class="col-8">
                                        <!-- Label Password Length -->
                                        <label for="password-length">Lunghezza Password:</label>
                                    </div>
                                    <!-- Input Col -->
                                    <div class="col-4">
                                        <!-- Password Length Input -->
                                        <input type="number" name="password-length" id="password-length" min="1" class="py-2">
                                    </div>
                                    <!-- Button Col -->
                                    <div class="col-12 d-flex justify-content-center mt-5">
                                        <!-- Submit Button -->
                                        <button type="submit" class="btn btn-primary mx-1">Invia</button>
                                        <button type="reset" class="btn btn-secondary mx-1">Annulla</button>
                                    </div>
                                </div>
                            </form>
                        <?php } else{ ?>
                        <!-- Password Content -->
                        <div class="password-content text-center bg-white rounded-3 p-5 w-50">
                            <h3>
                                <?php echo $password ?>
                            </h3>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </main>
        <!-- Fine Main -->
    </body>
</html>