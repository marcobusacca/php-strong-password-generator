<!-- SCRIPT PHP -->
<?php
    // DEFINISCO LA FUNZIONE CHE GENERA UNA PASSWORD RANDOM
    function randomPassword($maxLength) {

        // ELENCO LETTERE (MINUSCOLE E MAIUSCOLE)
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // ELENCO NUMERI
        $numbers = '0123456789';

        // ELENCO SIMBOLI
        $symbols = '!@#$%^&*()';

        // STRINGA COMPLETA CON I CARATTERI
        $baseString = $letters.$numbers.$symbols;

        // VARIABILE CONTENENTE TUTTI I CARATTERI DELLA PASSWORD RANDOM GENERATA
        $password = '';

        // CICLO FOR CHE VA DA 1 ALLA PASSWORD_LENGTH SCELTA DALL'UTENTE
        for ($i = 1; $i <= $maxLength; $i++) {

            // LUNGHEZZA ELENCO CARATTERI
            $baseStringLength = strlen($baseString);

            // NUMERO RANDOM, INDICE CHE INDICA IL CARATTERE RANDOM DA PRENDERE DALLA BASE STRING
            $x = rand(1, $baseStringLength);

            // USO IL NUMERO RANDOM COME INDICE PER L'ELENCO CARATTERI, ED INSERISCO IL CARATTERE RANDOM SELEZIONATO DENTRO LA STRINGA "PASSWORD"
            $password .= $baseString[$x-1];
        }

        // RITORNO LA PASSWORD
        return $password;
    }
?>