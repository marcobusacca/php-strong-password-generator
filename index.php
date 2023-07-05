<!-- SCRIPT PHP -->
<?php 

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
                                    <input type="number" name="password-length" id="password-length" class="py-2">
                                </div>
                                <!-- Button Col -->
                                <div class="col-12 d-flex justify-content-center mt-5">
                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary mx-1">Invia</button>
                                    <button type="reset" class="btn btn-secondary mx-1">Annulla</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- Fine Main -->
    </body>
</html>