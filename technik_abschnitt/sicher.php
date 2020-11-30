<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technik</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrap">
        <header>
            <nav>
                <ul>
                    <li><a href="../index_abschnitt/index.php">Home \</a></li>
                    <li><a href="../layout_gallerie/layout.php">Layout \</a></li>
                    <li><a href="technik.php">Technik \</a></li>
                    <li><a href="../navigation_sitemap/navigation.php">Navigation \</a></li>
                    <li><a href="../more_email/more.php">More</a></li>
                </ul>    
            </nav>
        </header>     
            <div class="links">
                <div class="logo">>> POWER PAGE- TECHNIK</div>
            </div>
            <div class="rechts">
                <p>Sie haben sich erfolgreich eingeloggt, nun können Sie den folgenden Text bearbeiten.</p>
            <form id="text" name="text" method="post" action="schreiben.php">
    <label for="eingabetext">Texteingabe:<br>
    </label>
    <textarea name="eingabetext" id="eingabetext" cols="50" rows="10">
	
	<?php include("technik.txt"); ?></textarea>
  <p>
    <label for="button"></label>
    <input type="submit" name="button" id="button" value="Text speichern">
  </p>
</form>  
<a href="ausgabe.php">Zur Ansicht</a>

            </div>

            
    </div>
</body>
</html>