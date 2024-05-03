<?php
// dichiarazione delle variabili ricevute dal lato client
// $message = $_GET["message"];
// $badword = $_GET["badword"];
// passaggio al metodo POST
$message = $_POST["message"];
$badword = $_POST["badword"];

// assegno ad una variabile il paragrafo censurato
$censured = str_replace($badword, '***', $message, $count);
?>

<div>
    <p>
        <!-- visualizzo nel dom il paragrafo ricevuto dal form -->
        Il messaggio originale è: <?php echo $message; ?>
    </p>
    <p>
        <!-- visualizo nel dom la lunghezza del paragrafo -->
        La lunghezza del messaggio originale è di: <?php echo strlen($message);?>
    </p>
    <p>
        <!-- visualizzo nel dom il paragrafo con la parola censurata -->
        Il messaggio censurato è: <?php echo $censured ?>
    </p>
    <p>
        <!-- visualizzo nel dom la lunghezza del paragrafo censurato -->
        La lunghezza del paragrafo censurato è di: <?php echo strlen($censured)?>
    </p>
    <p>
        <!-- visualizzo nel dom la parola censurata e il numero di volte che è stata censurata -->
        La parola <?php echo $badword; ?> è stata censurata <?php echo $count; ?> volte!
    </p>
</div>
