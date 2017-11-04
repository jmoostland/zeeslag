
<html>
    <head>

        <title>Zeeslag</title>

        <script>
            var boten=["1","2","3","4","5","6","7","8","9","10"];
            function schieten(mis) {
                document.getElementById('nummer' + mis).value=[boten[x]];
            }
            function schieten1(mis) {
                document.getElementById('nr1' + mis).value = "water";
            }
            function schieten2(raak) {
                document.getElementById('nr2' + raak).value = "boot";
            }
        </script>

        <style>
            
            .button{
                /*                display: box;*/
                color: whitesmoke;
                width: 50px;
                height: 50px;
                cursor: crosshair;
                background-image:url(water-banner.jpg);
            }
            .button:hover{
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                background-image:url(bom.jpg);
                width: 50px;
                height: 50px;
            }
            .button:active{
                background-image:url(bom.jpg);
                width: 50px;
                height: 50px;
            }
            .button:visited{
                background-image:url(water-banner.jpg);
                width: 50px;
                height: 50px;
            }

        </style>
    </head>
    <body>



        <?php
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten(" . $x . ") class=button value='.'id=nummer" . $x . ">";
        }
        echo "<br>";
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten1(" . $x . ") class=button value='.'id=nr1" . $x . ">";
        }
        echo "<br>";
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten2(" . $x . ") class=button value='.'id=nr2" . $x . ">";
        }
        echo "<br>";
        ?>





    </body>
</html>
