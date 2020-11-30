
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
          
                   
<?php


$inhaltssammler = "
Vorname:". $_POST['vorname']." \n
Nachname:". $_POST['nachname']." \n
Telefon: ".$_POST['telefon']."\n
Email: ".$_POST['email']." \n
Nachricht: ".$_POST['nachricht']." \n
----------------------------------------\n
";

echo"
<h4>Sie haben folgende Daten versendet:</h4><br/>

Vorname:". $_POST['vorname']." <br>
Nachname: ".$_POST['nachname']." <br>
Telefon: ".$_POST['telefon']."<br>
Email: ".$_POST['email']."<br>
Betreff: ".$_POST['betreff']."<br>
Nachricht: ".$_POST['nachricht']."<br><br>

Vielen Dank für Ihr Interesse. <br>
Ihre Elfriede Berger
";
$dateipfad ="more.txt";

$dateioffen = fopen($dateipfad, "a");

fwrite($dateioffen, $inhaltssammler, 1000000);
fclose($dateioffen);


?>

         
</body>
</html>



