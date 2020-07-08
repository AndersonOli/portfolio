<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>ops, página não encontrada!</title>
    </head>
    <style>
        body {
            height: 90vh;
            background: #000;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        @font-face {
            font-family: 'Montserrat-Regular';
            src: url("../assets/font/Montserrat-Regular.otf");
        }
        h1 {
            text-align: center;
            text-transform: uppercase;
            font-family: 'Montserrat-Regular';
        }
    </style>
    <body>
        <h1>
            Página não encontrada
            <br>
            reloading in
            <span id="counter-load"></span>
        </h1>
    </body>
    <script>
        var seconds = 10;
        document.getElementById("counter-load").innerHTML = seconds + "s ";
        var x = setInterval(function() {
            seconds--;
            document.getElementById("counter-load").innerHTML = seconds + "s ";
            if(seconds <= 1){
                window.location.href = '/';
            }
        }, 1000);
    </script>
</html>