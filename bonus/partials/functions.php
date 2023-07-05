<!-- SCRIPT PHP -->
<?php
    // DEFINISCO LA FUNZIONE CHE GENERA UNA PASSWORD RANDOM
    function randomPassword($maxLength) {

        $characters = [

            // ELENCO LETTERE (MINUSCOLE E MAIUSCOLE)
            'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // ELENCO NUMERI
            '1234567890',

            // ELENCO SIMBOLI
            '!@#$%^&*()',
        ];

        // LUNGHEZZA ARRAY TIPOLOGIA CARATTERI
        $charactersTypeLength = count($characters);

        // ARRAY CONTENENTE TUTTI I CARATTERI DELLA PASSWORD RANDOM GENERATA
        $password = [];

        // CICLO FOR CHE VA DA 1 ALLA PASSWORD_LENGTH SCELTA DALL'UTENTE
        for ($i = 1; $i <= $maxLength; $i++) {

            // NUMERO RANDOM CHE SCEGLIE QUALE TIPOLOGIA DI CARATTERE PRENDERE
            $x = rand(1, $charactersTypeLength);

            // LUNGHEZZA ELENCO CARATTERI
            $charactersLength = strlen($characters[$x-1]);

            // NUMERO RANDOM CHE SCEGLIE QUALE CARATTERE PRENDERE DELLA TIPOLOGIA CAPITATA
            $y = rand(1, $charactersLength);

            // USO IL NUMERO RANDOM COME INDICE PER L'ELENCO CARATTERI, ED INSERISCO IL CARATTERE RANDOM SELEZIONATO DENTRO L'ARRAY PASSWORD
            $password[] = $characters[$x-1][$y-1];
        }

        // RITORNO L'ARRAY PASSWORD SOTTOFORMA DI STRINGA
        return implode($password);
    }
?>