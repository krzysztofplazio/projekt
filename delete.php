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
    <h2>Delete</h2>
    <div class="container">
        <div class="lewy">
            <a href="index.php"><div class="first">Start</div></a>
            <a href="select.php"><div class="sec">Select</div></a>
            <a href="insert.php"><div class="thrd">Insert</div></a>
        </div>
        <div class="prawy">
            <div class="main" style="background-color: #f25022; text-align: center;">
                <p style="margin: 0;"><b style="font-size: 160%;">UWAGA!</b> <br /> Należy stosować z ostrożnością!</p> <br />
                <form method="post" action="">
                    Podaj ID: <input type="number" name="id" class="textins" style="float: right; border-color: #444; width: 40px; margin: 3px 80px 0;"/> <br />
                    <input type="submit" value="Usuń rekord!" class="submtdel" />
                </form>
                <?php
                    require_once 'connect.php';

                    $polaczenie = @new mysqli($db_server, $db_user, $db_pass, $db_name);
    
                    if($polaczenie->connect_errno != 0)
                    {
                        echo "Błąd: ".$polaczenie->connect_errno;
                    } else {

                        if(isset($_POST['id']))
                        {
                            $id = $_POST['id'];
                            if(empty($id))
                            {
                                echo "<p class='pins2' style='margin-top: 10px;'>Wprowadź dane poprawnie</p>";
                            } else {
                                $polaczenie->query("DELETE FROM tajne_dane WHERE id = '$id';");
                                $hurra = true;
                            }
                        }
                        if(isset($hurra) && $hurra == true)
                        {
                            echo "<p class='pins2' style='margin-top: 10px;'>Usunięto rekord z bazy o ID = $id.";
                        }
                        $polaczenie->close();
                    }
                ?>
            </div>
            <a href="baza.php"><div class="frd">Zobacz bazę!</div></a>
            <div class="fve" style="background-color: #7fba00; font-size: 105%"><i>“The people who are crazy enough to think they can change the world are the ones who do.”</i> ~ Steve Jobs</div>
        </div>
    </div>
</body>
</html>