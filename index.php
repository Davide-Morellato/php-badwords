<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
    <main>
        <!-- creo il FORM e collego in action la pagina di risposta "server.php" (sfrutto il metodo di default GET) -->
        <form action="./server.php">

            <!-- creo la textarea in cui insrerire il messaggio -->
            <p>
                <label for="message">Messaggio:</label>
                <textarea name="message" id="message" placeholder="Inserisci qui il tuo messaggio"></textarea>
            </p>

            <!-- creo l'input per ottenere la parola da censurare -->
            <p>
                <label for="word">Parola da censurare: </label>
                <input type="text" name="word" placeholder="Inserisci la parola da censurare">
            </p>


            <!-- aggiungo il bottone per inviare al server la parola inserita -->
            <button type="submit"> Invio </button>

        </form>
        
    </main>

    
            <!--
                A cosa serve il punto (.) tra le stringhe in php: PER ACCODARE STRINGHE
                <?php $test = 'ciao'; ?>
            <h1><?php echo 'Ciao' . 'Davide' . $test; ?></h1> -->

</body>

</html>