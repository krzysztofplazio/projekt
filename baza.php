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
    <h2>Baza danych</h2>
    <div class="container">
        <div class="lewy">
            <a href="index.php"><div class="first">Start</div></a>
            <a href="select.php"><div class="sec">Select</div></a>
            <a href="insert.php"><div class="thrd">Insert</div></a>
        </div>
        <div class="prawy">
            <div class="main" style="background-color: #ffb900;">
            <div class="tabcontainerbaza">
            <?php

            require_once 'connect.php';

            $polaczenie = @new mysqli($db_server, $db_user, $db_pass, $db_name);

            if($polaczenie->connect_errno != 0)
            {
                echo "Błąd: ".$polaczenie->connect_errno;
            } else {
                    
                        $select = $polaczenie->query("SELECT id, imie, nazwisko, adres FROM tajne_dane");   
                        $count = mysqli_num_rows($select);

                        if($count > 0)
                        {
                            echo "<table class='table1'>
                                <tr class='maintabbaza'>
                                    <th style='border-right: 1px solid #805d00;'>ID</th>
                                    <th>Imię</th>
                                    <th>Nazwisko</th>
                                    <th>Adres</th>
                                </tr>";
                            while($row = mysqli_fetch_assoc($select))
                            {
                                    
                            echo "<tr class='trbaza'>
                                    <td style='border-right: 1px solid #805d00;'>".$row['id']."</td>
                                    <td>".$row['imie']."</td>
                                    <td>".$row['nazwisko']."</td>
                                    <td>".$row['adres']."</td>
                                </tr>";
                            }
                            echo "</table><br />";
                        }
                    $polaczenie->close();
                }
            ?>
            </div>
            </div>
            <a href="baza.php"><div class="frd">Zobacz bazę!</div></a>
            <div class="fve" style="background-color: #7fba00; font-size: 105%"><i>“Sharing is good, and with digital technology, sharing is easy.”</i> ~ Richard Stallman</div>
        </div>
    </div>
</body>
</html>