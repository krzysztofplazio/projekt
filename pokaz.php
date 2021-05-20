<?php
    session_start();
    require_once 'connect.php';

    $polaczenie = @new mysqli($db_server, $db_user, $db_pass, $db_name);

    if($polaczenie->connect_errno != 0)
    {
        echo "Błąd: ".$polaczenie->connect_errno;
    } else {
                    
        if(isset($_GET['imie']))
        {
            $imie = $_GET['imie'];
            $imie = htmlentities($imie, ENT_QUOTES, "UTF-8"); // z uwzględnieniem sql injection

            if($imie == '')
            {
                echo "Podaj poprawne dane!";
            } else {
                $select = $polaczenie->query(sprintf("SELECT imie, nazwisko FROM tajne_dane WHERE imie = '%s';", mysqli_real_escape_string($polaczenie, $imie)));   
                // $select = $polaczenie->query("SELECT imie, nazwisko FROM tajne_dane WHERE imie = '$imie';");   
                $count = mysqli_num_rows($select);

                if(empty($count))
                {
                    echo "Brak osób w bazie o imieniu $imie.";
                }
                            
                if($count > 0)
                {
                    echo "<table>
                            <tr class='maintab'>
                                <th>Imię</th>
                                <th>Nazwisko</th>
                            </tr>";
                    function wypisz($select)
                    {
                        while($row = mysqli_fetch_assoc($select))
                        {
                            echo "<tr>
                                    <td>".$row['imie']."</td>
                                    <td>".$row['nazwisko']."</td>
                                </tr>";
                        }
                    }
                    wypisz($select);
                    echo "</table><br />";
                }
            }
        } else {
            echo "(Tutaj będzie się wyświetlać tabela)";
        }
        $polaczenie->close();
    }
?>