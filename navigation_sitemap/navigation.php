<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrap" id="layout">
        <header>
            <nav>
                <ul>
                    <li><a href="../index_abschnitt/index.php">Home \</a></li>
                    <li><a href="../layout_gallerie/layout.php">Layout \</a></li>
                    <li><a href="../technik_abschnitt/technik.php">Technik \</a></li>
                    <li><a href="navigation.php">Navigation \</a></li>
                    <li><a href="../more_email/more.php">More</a></li>
                </ul>    
            </nav>
        </header>    
            <div class="links">
                <div class="logo">>> POWER PAGE- NAVIGATION</div>
            </div>
            <div class="rechts">
              <h2>Sitemap</h2>
              <?php
/*Ausgabe von Ordnern und Dateninhalten
1: Unterscheidung zwischen Ordner und Datei
2: Ordner einrücken, Dateien einrücken (höherer Wert)
3: Ordner in fett ohne Link
4: Dateien als Hyperlinks mit Ausgabe in neuem Fenster
*/
function sitemap($pOrdnername, $einschubOrdner=20, $einschubDateien = 50){
	/*Ordner für die Verarbeitung öffnen, mit Platzhalter für den späteren Ordner, de rabgearbeitet werden soll*/
	$verzeichnis = opendir($pOrdnername);
	/*Solange wie Daten im Ordner zu finden sind, diese IM EINZELNEN LESEN (readdir) */
	while($datenstruktur = readdir($verzeichnis)){
		/*Wenn es nicht die Pfadstrukturen zum Ordner hin sind
		Wenn es sich NICHT (!) um die Angaben der Pfadtiefen/Hierachien handelt */
		if($datenstruktur != "." && $datenstruktur != ".."){
			/*Wenn es sich dann bei der gefundenen Struktur im Ordner daten auch noch um einen Ordnern handelt, dann im Ordnerformat zurückgeben, ansonsten als Datei  */
			if(is_dir($pOrdnername."/".$datenstruktur)){
				/*daten/Allgemein*/
		echo "<p style='padding-left:".$einschubOrdner."px; color: black;'>$datenstruktur</p><br>";
			
			// Wenn es ein Ordner sein sollte, auch dessen Unterstrukturen durchkontrollieren mit der gleichen Funktion
	sitemap($pOrdnername."/".$datenstruktur);
			}else{
		echo "<a href='$pOrdnername/$datenstruktur' target='_blank' style='padding-left:".$einschubDateien."px; color: black;'>$datenstruktur</a><br>";	
			}
		}
	}
	// Wenn alles abgearbeitet, den Ordner daten als geöffnete eingelesen Struktur wieder schliessen
	closedir($verzeichnis);
}

/*Funktion aufrufen mit Angabe des Abarbeitungsordners*/
sitemap("daten/"); 


?>


                 

            </div>
    </div>
</body>
</html>