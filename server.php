<?php

    var_dump($_GET); //debug

    //richiamo la parola da censurare dal FORM, creando una variabile a cui collego il $_GET['chiave di lettura "name" dell'input in index.php']
    $word = $_GET['word'];
    $word_lower =  strtolower($word); // conversione caratteri in minuscolo

    //richiamo il messaggio dal FORM, creando una variabile a cui collego il $_GET['chiave di lettura "name" della textarea in index.php']
    $message = $_GET['message'];
    $message_lower = strtolower($message); // conversione caratteri in minuscolo

    //creo una variabile per sapere la lunghezza della parola inserita, sfruttando la funzione "strlen()" fornendo come parametro la variabile interessata ($word)
    $word_length = strlen($word);

    //creo una variabile per sapere la lunghezza del messaggio inserito, sfruttando la funzione "strlen()" fornendo come parametro la variabile interessata ($word)
    $message_length = strlen($message);

    //creo una variabile per sostituire la parola inserita ($word) con ***, così da restituire il messaggio con la parola censurate,
    //str_replace(variabile da sostituire, stringa in sostituizione, stampa della parola sostituita, conteggio parole sostituite)
    $censored_message = str_replace($word_lower, '***', $message_lower, $count);

    // TEST:  $new_censored_word = str_replace($word[4], '***', $word) -> CREA UN CICLO A PARTIRE DALL'INDICE INDICATO (in questo caso [4]) SOSTITUENDO POI TUTTE LE LETTERE UGUALI

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords_answer</title>
</head>
    <body>
        <main>
            <div>
                <!-- stampo nel DOM la parola inserita dall'utente -->
                <p>
                    Parola da Censurare: <?php echo $word; ?>
                </p>

                <!-- stampo nel DOM la lunghezza della parola inserita dall'utente -->
                <p>
                    Lunghezza della Parola da Censurare (n. caratteri): <?php echo $word_length; ?>
                </p>

                <!-- stampo nel DOM la lunghezza del messaggio con la parola da censurare inserita dall'utente -->
                <p>
                    Lunghezza del Messaggio con la Parola da Censurare (n. caratteri): <?php echo $message_length; ?>
                </p>

                <!-- stampo nel DOM il messaggio con la parola sostituita dagli asterischi -->
                <p>
                    Parola Censurata: <?php echo $censored_message; ?>
                </p>

                <!-- stampo nel DOM il numero delle parole sostituite sfruttando il $count utilizzato nella funzione str_replace() -->
                <p>
                    Parole Sostituite nel Messaggio Censurato: <?php echo $count; ?>
                </p>

            </div>
        </main>
    </body>
</html>