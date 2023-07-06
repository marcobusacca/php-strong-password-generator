<!-- SCRIPT PHP -->
<?php
    // CONTROLLO CHE LE VARIABILI DEL METODO GET NON SIANO Null o VALORI NON ACCETTATI
    if(isset($_GET['password-length']) && $_GET['password-length'] !== '' && $_GET['password-length'] > 0 && $_GET['password-length'] <= 100 && isset($_GET['characters-ripetition'])) {

        // AVVIO LA SESSIONE
        session_start();

        // SALVO PASSWORD_LENGTH DENTRO SESSION
        $_SESSION['password-length'] = $_GET['password-length'];

        // SALVO CHARACTERS_RIPETITION DENTRO SESSION
        $_SESSION['characters-ripetition'] = $_GET['characters-ripetition'];

        if (isset($_GET['letters'])){
            // SALVO LETTERS DENTRO SESSION
            $_SESSION['letters'] = $_GET['letters'];
        }

        if (isset($_GET['numbers'])){
            // SALVO NUMBERS DENTRO SESSION
            $_SESSION['numbers'] = $_GET['numbers'];
        }

        if (isset($_GET['symbols'])){
            // SALVO NUMBERS DENTRO SESSION
            $_SESSION['symbols'] = $_GET['symbols'];
        }
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
                        <?php if(empty($_SESSION)){ ?>
                            <!-- Form -->
                            <form action="index.php" method="GET" class="bg-white rounded-3 p-5 w-50">
                                <!-- Form Row -->
                                <div class="row justify-content-end">
                                    <!-- First Section Col -->
                                    <div class="col-12">
                                        <!-- First Section Row -->
                                        <div class="row align-items-center">
                                            <!-- Label Col -->
                                            <div class="col-8">
                                                <!-- Label Password Length -->
                                                <label for="password-length">Lunghezza Password:</label>
                                            </div>
                                            <!-- Input Col -->
                                            <div class="col-4">
                                                <!-- Password Length Input -->
                                                <input type="number" name="password-length" id="password-length" min="1" max="100" class="py-2 w-100">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Section Col -->
                                    <div class="col-12 my-5">
                                        <!-- Second Section Row -->
                                        <div class="row">
                                            <!-- Label Col -->
                                            <div class="col-8">
                                                <!-- Label Characters Ripetition -->
                                                <label for="characters-ripetition">Consenti ripetizioni di uno o più caratteri:</label>
                                            </div>
                                            <!-- Input Col -->
                                            <div class="col-4" id="characters-ripetition">
                                                <!-- Radio Button Row -->
                                                <div class="row">
                                                    <!-- Characters Ripetition Radio Button: Yes -->
                                                    <div class="col-12">
                                                        <input type="radio" name="characters-ripetition" id="ripetition-true" value="true">
                                                        <label for="ripetition-true">Si</label>
                                                    </div>
                                                    <!-- Characters Ripetition Radio Button: No -->
                                                    <div class="col-12">
                                                        <input type="radio" name="characters-ripetition" id="ripetition-false" value="false">
                                                        <label for="ripetition-false">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Third Section Col -->
                                    <div class="col-4">
                                        <!-- Third Section Row -->
                                        <div class="row w-20">
                                            <!-- First Checkbox Col -->
                                            <div class="col-12">
                                                <!-- Letters Checkbox -->
                                                <input type="checkbox" name="letters" id="letters" value="0">
                                                <!-- Letters Checkbox Label -->
                                                <label for="letters">Lettere</label>
                                            </div>
                                            <!-- Second Checkbox Col -->
                                            <div class="col-12">
                                                <!-- Numbers Checkbox -->
                                                <input type="checkbox" name="numbers" id="numbers" value="1">
                                                <!-- Numbers Checkbox Label -->
                                                <label for="numbers">Numeri</label>
                                            </div>
                                            <!-- Third Checkbox Col -->
                                            <div class="col-12">
                                                <!-- Symbols Checkbox -->
                                                <input type="checkbox" name="symbols" id="symbols" value="2">
                                                <!-- Symbols Checkbox Label -->
                                                <label for="symbols">Simboli</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button Col -->
                                    <div class="col-12 d-flex justify-content-center mt-5">
                                        <!-- Submit Button -->
                                        <button type="submit" class="btn btn-primary mx-1">Invia</button>
                                        <button type="reset" class="btn btn-secondary mx-1">Annulla</button>
                                    </div>
                                </div>
                            </form>
                        <?php } else{
                                header("Location: ./partials/inner_page.php");
                            }
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <!-- Fine Main -->
    </body>
</html>