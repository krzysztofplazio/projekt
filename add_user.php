<?php

    session_start();
    require_once 'connect.php';
    $polaczenie = @new mysqli($db_server, $db_user, $db_pass, $db_name);

    if($polaczenie->connect_errno != 0)
    {
        echo "Błąd: ".$polaczenie->connect_errno;
    } else {
        if(isset($_POST['imie']) || isset($_POST['nazw']) || isset($_POST['adres']))
        {
            $imie = $_POST['imie'];
            $nazw = $_POST['nazw'];
            $adres = $_POST['adres'];

            if(empty($imie) || empty($nazw) || empty($adres))
            {
                $_SESSION['blad'] = "<p class=\"pins2\">Wprowadź wszystkie dane poprawnie!</span> ";
            } else {
                $polaczenie->query("INSERT INTO tajne_dane (imie, nazwisko, adres) VALUES ('$imie', '$nazw', '$adres');");
                $_SESSION['hurra'] = true;
            }    
        }
    }
    $polaczenie->close();
    header('Location: insert.php');
    exit();
?>
