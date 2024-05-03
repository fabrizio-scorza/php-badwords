<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <!-- form per l'invio dei dati al server -->
    <form action="./server.php">
        <div>
            <label for="message">Inserisci il tuo messaggio:</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="badword">Inserisci la parola da censurare</label>
            <input name="badword" id="badword" type="text">
        </div>
        <button>Invia</button>
    </form>    
</body>
</html>