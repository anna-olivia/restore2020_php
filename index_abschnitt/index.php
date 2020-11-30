<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrap">
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home \</a></li>
                    <li><a href="../layout_gallerie/layout.php">Layout \</a></li>
                    <li><a href="../technik_abschnitt/technik.php">Technik \</a></li>
                    <li><a href="../navigation_sitemap/navigation.php">Navigation \</a></li>
                    <li><a href="../more_email/more.php">More</a></li>
                </ul>    
            </nav>
        </header>    
            <div class="links">
                <div class="logo">>> POWER PAGE- HOME</div>
            </div>
            <div class="rechts">
                <!-- text wird über php generiert, der später übers login bearbeitet werden kann -->
                <?php include("index.txt"); ?>
                <!-- formular um eine loginkontrolle zu generieren, für redaktion --> 
<form name="login" method="post" action="kontrolle.php">
           
  <p>
    <label for="loginkennung">Login-Kennung:</label>
  </p>
  <p>
    <input type="text" name="loginkennung" id="loginkennung">
  </p>
  <p>
    <label for="passwort">Passwort:</label>
  </p>
  <p>
    <input type="password" name="passwort" id="passwort">
  </p>
  <p>
    <label for="button"></label>

    <input type="submit" name="button" id="button" value="Login prüfen">
  </p>



            </form>       

            </div>






    </div>
</body>
</html>