<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kontrolle</title>
<link rel="stylesheet" href="../css/style.css">
<script language="javascript" type="text/javascript">
<!--
function zumFormular(){
	history.back();	
}
//-->
</script>

</head>

<body>
    <div class="wrap">
        <header>
            <nav>
                <ul>
                    <li><a href="../index_abschnitt/index.php">Home \</a></li>
                    <li><a href="../layout_gallerie/layout.php">Layout \</a></li>
                    <li><a href="../technik_abschnitt/technik.php">Technik \</a></li>
                    <li><a href="../navigation_sitemap/navigation.php">Navigation \</a></li>
                    <li><a href="more.php">More</a></li>
                </ul>    
            </nav>
        </header>    
            <div class="links">
                <div class="logo">>> POWER PAGE- MORE</div>
            </div>
            <div class="rechts">
            <h1>Kontrolle des Formulars:</h1>

<?php
/*Wenn der Versand der Formukardaten tatsächlich über den senden-Schalter eingeleitet wurde*/
if(isset($_POST["senden"])){

/*Grundreinigung, soll für die MUSS-Felder flexibel anwendbar sein: Umlaute Email-veträglich umschreiben, unzulässige Leerzeichen entfernen und keinen HTML-Code erlauben sowie keine Seitennamen/Webseiten*/
function daten_check($pFeldname){
	// Wenn Feld nicht leer, dann Grundreinigung
	if(!empty($pFeldname)){
	// Umlaut und Sonderzeichen umschreiben
		$pFeldname = htmlentities($pFeldname);
	// Leerzeichen, die nicht zulässig sind wegnehmen/trimmen
		$pFeldname = trim($pFeldname);
	// HTML-Code untersagen http-Angaben bezüglich der Verwendung von Slash-Zeichen
		$pFeldname = stripslashes($pFeldname);
	}
	// Felder für die Weiterverarbeitung dann in bereinigter Form zurückgeben
	return $pFeldname;
  }
  
  // Die daten_reinigen-Funktion nun hintereinander weg für jedes Feld aus dem Formular anwenden
  daten_check($_POST["vorname"]);
  daten_check($_POST["nachname"]);
  daten_check($_POST["firma"]);
  daten_check($_POST["telefon"]);
  daten_check($_POST["fax"]);
  daten_check($_POST["email"]);
  daten_check($_POST["betreff"]);
  daten_check($_POST["nachricht"]);
  
  /*Wenn die *-Felder (MUSS-Felder) nicht korrekt gehandhabt wurden, dann Fehlermendungen konstrukieren.*/
  
  //1: Wenn Vorname leer - Meldung
  $meldung="";
  if(strlen($_POST["vorname"])==0){
	  $meldung = "Bitte geben Sie Ihren Vornamen korrekt ein!<br>";
  }

  //2: Wenn Nachname leer - Meldung
  if(strlen($_POST["nachname"])==0){
	  // Wenn in Meldung schon was drinsteht, dann den Text stehenlassen und den neuen dahinterhängen (.-Operator als Verknüpfungszeichen)
	  $meldung = $meldung."Bitte geben Sie Ihren Nachnamen korrekt ein!<br>";
  }
  
  //3: Email prüfen + Meldung
   if(strlen($_POST["email"])==0 || !(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$_POST['email']))){
	  $meldung = $meldung."Bitte geben Sie Ihren Email korrekt ein!<br>";
  }

  //4: Betreff prüfen + Meldung
   if(strlen($_POST["betreff"])==0){
	  $meldung = $meldung."Bitte geben Sie Ihren Betreff korrekt ein!<br>";
  }
  
    //5: Betreff prüfen + Meldung
   if(strlen($_POST["nachricht"])==0){
	  $meldung = $meldung."Bitte geben Sie Ihren Nachricht korrekt ein!<br>";
  }

 // Rückmeldung krieren, aber nur dann, wenn es was zum Meckern gibt ($meldung), ansonsten den Versand + Listung ausführen	
	if($meldung == true){
		echo "$meldung<br/>
		<a href='javascript:;' onclick='zumFormular();'>Zurück zum Formular</a>";
	}else{
		include("senden.php");
	}
	
}
?>    

            </div>






    </div>


</body>
</html>