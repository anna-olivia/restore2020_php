<?php
/*
1: Diese Datei soll die Datei text.txt als Schreibspeicher nutzen, muss diese also erstmal finden.
2: Öffnen der Datei + beschreibbar machen
3: Schreiben und Speichern der neuen Einträge
4: Schliessen der Datei
5: Weiterleiten auf die Ausgabeseite
*/

/*1: Variable für den Pfad zur Textdatei anlegen zur Verwaltung*/
$dateipfad = "index.txt";
/*2: Öffnen der Datei + Schreibfähigkeit festlegen

Mögliche Rechte:
r- readable - lesbar
w- writable - beschreibbar
x- executable - ausführbar
oder Kombinationen z.B. rw oder rwx
*/
$dateioffen = fopen($dateipfad,"w");
/*Schreiben/neue Inhalte hinzufügen und speichern in der geoffneten beschreibbar gemachten Datei, 
beliefert wird die Datei über das große Textfeld aus der Datei eingabe.php mit dem name-Wert eingabetext via Versandmethode POST übertragen, 
akzeptiert/berücksichtigt werden 100000 Zeichen im Textfeld */
fputs($dateioffen, $_POST["eingabetext"],100000);
/*4*: Schliessen der Datei, welche geöffnet wurde und beschrieben wurde*/
fclose($dateioffen);
/*5: Weiterleitung auf die Ausgabeseite */
header("location:ausgabe.php");
?>