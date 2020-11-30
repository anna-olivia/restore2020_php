<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrap" id="layout">
        <header>
            <nav>
                <ul>
                    <li><a href="../index_abschnitt/index.php">Home \</a></li>
                    <li><a href="layout.php">Layout \</a></li>
                    <li><a href="../technik_abschnitt/technik.php">Technik \</a></li>
                    <li><a href="../navigation_sitemap/navigation.php">Navigation \</a></li>
                    <li><a href="../more_email/more.php">More</a></li>
                </ul>    
            </nav>
        </header>    
            <div class="links" id="layout">
                <div class="logo">>> POWER PAGE- LAYOUT</div>
            </div>
            <div class="rechts" id="bilder">
              <h2>Bildergalerie</h2>
<?php 
//traegerpfad für ordner definieren
//@ ist opererator der fehlermeldungen unterdrückt damit man dann über die() eigene fehlermeldung schreiben kann
//verzeichnis auslesen und als img container generieren
//read methode für ordner auslesen und dann einzelne dateien zurückzugeben
//

$traegerpfad = "pics";
@$verzeichnis = dir($traegerpfad) or die ("Es liegen aktuell keine Bilder vor, bitte treffen Sie eine neue Auswahl, Vielen Dank!");

while($datei = $verzeichnis->read()){
	if(preg_match('/.gif|.jpg|.png/',$datei)){
        	/*Dateiname ohne Endung-ab punkt dateiname kürzen + in Großbuchstaben*/
        $dateiname = explode('.',$datei);
        $dateiname = strtoupper($dateiname[0]);
	echo " 
	<figcaption>$dateiname</figcaption>
	<figure><img src='$traegerpfad/$datei'></figure> 
	";
		}
}


$verzeichnis->close();

?>


                 

            </div>
    </div>
</body>
</html>