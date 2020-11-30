<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More</title>
    <link rel="stylesheet" href="../css/style.css">
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
            <form id="more" name="more" method="post" action="pruefen.php">
  <p>
    <label for="anrede">Anrede*:</label>
    <select name="anrede" id="anrede">
      <option value="Herr">Herr</option>
      <option value="Frau" selected="selected">Frau</option>
    </select>
  </p>
  <p>
    <label for="vorname">Vorname*:</label>
    <input type="text" name="vorname" id="vorname">
  </p>
  <p>
    <label for="nachname">Nachname*:</label>
    <input type="text" name="nachname" id="nachname">
  </p>
  <p>
    <label for="firma">Firma:</label>
    <input type="text" name="firma" id="firma">
  </p>
  <p>
    <label for="telefon">Telefon:</label>
    <input type="text" name="telefon" id="telefon">
  </p>
  <p>
    <label for="fax">Fax:</label>
    <input type="text" name="fax" id="fax">
  </p>
  <p>
    <label for="email">Email*:</label>
    <input type="text" name="email" id="email">
  </p>
  <p>
    <label for="anliegen">Anliegen:</label>
    <select name="anliegen" id="anliegen">
      <option value="Information">Information</option>
      <option value="Sponsor">Sponsor</option>
      <option value="Nachricht">Nachricht</option>
      <option value="Kommantar">Kommanta</option>
    </select>
  </p>
  <p>
    <label for="betreff">Betreff*:</label>
    <input type="text" name="betreff" id="betreff">
  </p>
  <p>
    <label for="nachricht">Nachricht*:</label>
    <br />
<textarea name="nachricht" id="nachricht" cols="45" rows="5"></textarea>
  </p>
  <p>
    <label for="senden"></label>
    <input type="submit" name="senden" id="senden" value="Senden">
    <label for="reset"></label>
    <input type="reset" name="reset" id="reset" value="Zurücksetzen">
  </p>
  <p>* müssen ausgefüllt werden</p>
</form>

            </div>






    </div>
</body>
</html>