<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="main.css" />
    <link rel="icon" type="image/svg" href="favicon.svg" />
    <title>Strona Głowna</title>
</head>
<body>
    <h2>Insert</h2>
    <div class="container">
        <div class="lewy">
            <a href="index.php"><div class="first">Start</div></a>
            <a href="select.php"><div class="sec">Select</div></a>
            <a href="insert.php"><div class="thrd">Insert</div></a>
        </div>
        <div class="prawy">
            <div class="main" style="background-color: #00a4ef;">
                <form method="post" action="add_user.php" autocomplete="off">
                    <label><p class="pins">Podaj <b>imię</b>: </p> <input type="text" name="imie" class="textins" placeholder="np. Jan"/></label>
                    <label><p class="pins">Podaj <b>nazwisko</b>: </p> <input type="text" name="nazw" class="textins" placeholder="np. Kowalski"/></label>
                    <label><p class="pins">Podaj <b>adres</b>: </p> <input type="text" name="adres" class="textins" placeholder="np. Warszawa 172"/></label>
                    <input type="submit" value="Dodaj do bazy!" class='submtins' />
                </form>
                <?php
                    if(isset($_SESSION['hurra']))
                    {
                        echo "<p class=\"pins2\">Gratulacje! Udało ci się dodać rekord do bazy!</p>";
                        session_unset();
                    }
                    if(isset($_SESSION['blad']))
                    {
                        echo $_SESSION['blad'];
                        session_unset();
                    }
                ?>
            </div>
            <a href="baza.php"><div class="frd">Zobacz bazę!</div></a>
            <div class="fve" style="background-color: #f25022;"><i>“Intelligence is the ability to avoid doing work, yet getting the work done”</i> ~ Linus Torwalds</div>
        </div>
    </div>
</body>
</html>