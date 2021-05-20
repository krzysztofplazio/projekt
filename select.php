<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/svg" href="favicon.svg" />
    <link rel="stylesheet" href="main.css" />
    <title>Strona Głowna</title>
</head>
<body>
    <h2>Select</h2>
    <div class="container">
        <div class="lewy">
            <a href="index.php"><div class="first">Start</div></a>
            <a href="select.php"><div class="sec">Select</div></a>
            <a href="insert.php"><div class="thrd">Insert</div></a>
        </div>
        <div class="prawy">
            <div class="main" style="background-color: #7fba00;">
            <form method="get" action="" autocomplete="off">
                <label>
                    <p class="psel">Podaj imię:</p> <input type="text" name="imie" placeholder="np. Krzysztof" class="text" oninput="showName(this.value)"/> 
                    <input type="submit" value="Znajdź" class="submt" />
                </label>
            </form>
            <script>
            function showName(str)
            {
                var xhttp;
                if(str == "")
                {
                    document.getElementsByClassName("tabcontainer")[0].innerHTML = "(Tutaj będzie się wyświetlać tabela)";
                    return;
                }
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function()
                {
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementsByClassName("tabcontainer")[0].innerHTML = this.responseText;

                    }
                };
                xhttp.open("GET", "pokaz.php?imie=" + str, true)
                xhttp.send();
            }
            </script>
            <div style="clear: both;"></div>
            <div class="tabcontainer"></div>
            </div>
            <a href="baza.php"><div class="frd">Zobacz bazę!</div></a>
            <div class="fve"><i>“Success is a lousy teacher. It seduces smart people into thinking they can’t lose.”</i> ~ Bill Gates</div>
        </div>
    </div>
</body>
</html>