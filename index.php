
<html>
    <head>

        <title>Zeeslag</title>

        <script>

            function mouseOver() {
                document.getElementById("kleur").style.color = "blue";
            }

            function mouseOut() {
                document.getElementById("kleur").style.color = "black";
            }

            function schieten(mis) {
                document.getElementById('nummer' + mis).value = "water";
            }
            function schieten1(mis) {
                document.getElementById('nr1' + mis).value = "water";
            }
            function schieten2(mis) {
                document.getElementById('nr2' + mis).value = "water";
            }
            function schieten3(raak) {
                document.getElementById('nr3' + raak).value = "boot";
            }
            function schieten4(raak) {
                document.getElementById('nr4' + raak).value = "boot";
            }
            function schieten5(mis) {
                document.getElementById('nr5' + mis).value = "water";
            }
            function schieten6(mis) {
                document.getElementById('nr6' + mis).value = "water";
            }
            function schieten7(raak) {
                document.getElementById('nr7' + raak).value = "boot";
            }
            function schieten8(mis) {
                document.getElementById('nr8' + mis).value = "water";
            }
            function schieten9(mis) {
                document.getElementById('nr9' + mis).value = "water";
            }
            function schieten10(mis) {
                document.getElementById('nr10' + mis).value = "water";
            }
            function schieten11(mis) {
                document.getElementById('nr11' + mis).value = "water";
            }
            function schieten12(mis) {
                document.getElementById('nr12' + mis).value = "boot";
            }
            function schieten13(mis) {
                document.getElementById('nr13' + mis).value = "water";
            }
            function schieten14(mis) {
                document.getElementById('nr14' + mis).value = "water";
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
        echo "<h1 align = center style=font-family:Courier New id =kleur onmouseover = mouseOver() onmouseout = mouseOut()>Zeeslag</h1>";


        echo "<p align=center>"; 
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten(" . $x . ") class=button value='.'id=nummer" . $x . ">";
        }
        echo "<br>";
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten1(" . $x . ") class=button value='.'id=nr1" . $x . ">";
        }
        echo "<br>";

        for ($x = 0; $x < 7; $x++) {
            echo "<input type=button onclick=schieten2(" . $x . ") class=button value='.'id=nr2" . $x . ">";
        }
//        $x = array(" ", " ", " ", " ", " ", " ", " ", " ", " ", " ");
        for ($y = 0; $y < 3; $y++) {
            echo "<input type=button onclick=schieten3(" . $y . ") class=button value='.'id=nr3" . $y . ">";
        }
        echo "<br>";
        for ($y = 0; $y < 5; $y++) {
            echo "<input type=button onclick=schieten4(" . $y . ") class=button value='.'id=nr4" . $y . ">";
        }
        for ($x = 6; $x > 5 and $x < 11; $x++) {
            echo "<input type=button onclick=schieten5(" . $x . ") class=button value='.'id=nr5" . $x . ">";
        }
        echo '<br>';
        for ($x = 0; $x < 7; $x++) {
            echo "<input type=button onclick=schieten6(" . $x . ") class=button value='.'id=nr6" . $x . ">";
        }
        for ($y = 8; $y > 7 and $y < 10; $y++) {
            echo "<input type=button onclick=schieten7(" . $y . ") class=button value='.'id=nr7" . $y . ">";
        }
        for ($x = 9; $x == 9; $x++) {
            echo "<input type=button onclick=schieten8(" . $x . ") class=button value='.'id=nr8" . $x . ">";
        }
        echo '<br>';
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten9(" . $x . ") class=button value='.'id=nr9" . $x . ">";
        }
        echo '<br>';
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten10(" . $x . ") class=button value='.'id=nr10" . $x . ">";
        }
        echo '<br>';
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten11(" . $x . ") class=button value='.'id=nr11" . $x . ">";
        }
        echo '<br>';
        for ($x = 6; $x < 10; $x++) {
            echo "<input type=button onclick=schieten12(" . $x . ") class=button value='.'id=nr12" . $x . ">";
        }
        for ($y = 0; $y < 6; $y++) {
            echo "<input type=button onclick=schieten13(" . $y . ") class=button value='.'id=nr13" . $y . ">";
        }
        echo '<br>';
        for ($x = 0; $x < 10; $x++) {
            echo "<input type=button onclick=schieten14(" . $x . ") class=button value='.'id=nr14" . $x . ">";
        }
        echo "</p>";
        ?>

    </body>
</html>
