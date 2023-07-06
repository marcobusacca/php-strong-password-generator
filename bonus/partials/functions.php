<!-- SCRIPT PHP -->
<?php
    // DEFINISCO LA FUNZIONE CHE GENERA UNA PASSWORD RANDOM
    function randomPassword($maxLength, $charactersRipetition) {

        // ELENCO LETTERE (MINUSCOLE E MAIUSCOLE)
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // ELENCO NUMERI
        $numbers = '0123456789';

        // ELENCO SIMBOLI
        $symbols = '!@#$%^&*()';

        // STRINGA COMPLETA CON TUTTI I TIPI DI CARATTERE
        $baseString = '';

        // CONTROLLO SE è STATO SELEZIONATO ALLOW_LETTERS
        if(isset($_SESSION['letters'])){
            // AGGIUNGO LE LETTERE ALLA STRINGA COMPLETA CON TUTTI I TIPI DI CARATTERE
            $baseString .= $letters;
        }

        // CONTROLLO SE è STATO SELEZIONATO ALLOW_NUMBERS
        if(isset($_SESSION['numbers'])){
            // AGGIUNGO I NUMERI ALLA STRINGA COMPLETA CON TUTTI I TIPI DI CARATTERE
            $baseString .= $numbers;
        }

        // CONTROLLO SE è STATO SELEZIONATO ALLOW_SYMBOLS
        if(isset($_SESSION['symbols'])){
            // AGGIUNGO I SIMBOLI ALLA STRINGA COMPLETA CON TUTTI I TIPI DI CARATTERE
            $baseString .= $symbols;
        }

        // SE NON è STATO SELEZIONATO NESSUN TIPO DI CARATTERE, AGGIUNGO TUTTI I TIPI DI CARATTERE
        if(!isset($_SESSION['letters']) && !isset($_SESSION['numbers']) && !isset($_SESSION['symbols'])){
            $baseString = $letters.$numbers.$symbols;
        }

        // VARIABILE CONTENENTE TUTTI I CARATTERI DELLA PASSWORD RANDOM GENERATA
        $password = '';

        // CICLO WHILE CHE VA DA 1 ALLA PASSWORD_LENGTH SCELTA DALL'UTENTE
        while (strlen($password) < $maxLength) {

            // LUNGHEZZA ELENCO CARATTERI
            $baseStringLength = strlen($baseString);

            // NUMERO RANDOM, INDICE CHE INDICA IL CARATTERE RANDOM DA PRENDERE DALLA BASE STRING
            $x = rand(1, $baseStringLength);

            // USO L'INDICE PER ESTRARRE IL CARATTERE RANDOM DALLA BASE_STRING
            $char = $baseString[$x-1];

            // SE L'UTENTE HA SELEZIONATO "NOT_ALLOW_CHARACTERS_RIPETITION", AGGIUNGO ALLA PASSWORD SOLO CARATTERI UNIVOCI
            if (!$charactersRipetition && !str_contains($password, $char)){

                // INSERISCO IL CARATTERE RANDOM SELEZIONATO DENTRO LA STRINGA "PASSWORD"
                $password .= $char;

            } else if($charactersRipetition){ // L'UTENTE HA SELEZIONATO "ALLOW_CHARACTERS_RIPETITION"
                
                // INSERISCO IL CARATTERE RANDOM SELEZIONATO DENTRO LA STRINGA "PASSWORD"
                $password .= $char;
            }
        }

        // RITORNO LA PASSWORD
        return $password;
    }
?>