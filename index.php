
<html>
    <head>

        <title>Zeeslag</title>

        <script>
            function schieten(mis) {
                document.getElementById('nummer' + mis).value = "water";

            }
            function schieten1(mis) {
                document.getElementById('nr1' + mis).value = "water";
            }
            function schieten2(raak) {
                document.getElementById('nr2' + raak).value = "boot";
            }
        </script>

        <style>
            .button:hover{
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                background-image:url(bom.jpg);
                width: 50px;
                height: 50px;
            }

            .button {
/*                display: box;*/
                width: 50px;
                height: 50px;
                cursor: crosshair;
                background-image:url(water-banner.jpg);
            }
            
            .button:after{
                background-color: aqua;
                width: 50px;
                height: 50px;
            }

        </style>
    </head>
    <body>



        <?php
        $plaatsen=array("boot","boot","boot","water","water","water","water","water","water","water");
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten(" .$x. ") class=button value='.' id=nummer" . $x . ">";
        }
        echo "<br>";
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten1(" . $x . ") class=button value=plaatje id=nr1" . $x . ">";
        }
        echo "<br>";
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten2(" . $x . ") class=button value=plaatje id=nr2" . $x . ">";
        }
        echo "<br>";
        ?>





    </body>
</html>
