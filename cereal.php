<H1> Get Cereal Nutrition Information</H1>
<p> Enter the cereal to get the number of calories and sugars! </p>

<?php
        // allows user to choose cereal
        echo "<form action='cereal.php' method='GET'>";
        echo "<textarea cols=20 rows=1 name='cereal'> </textarea>";
        echo "<input type=submit>";
        echo "</form>";


        if (!empty($_GET["cereal"])) {
            $cereal=$_GET['cereal'];
            $awk_link = "awk -f cereal.awk";
            $awk_link .= "$cereal";
            echo "<H3>$cereal</H3> \n";

            // run awk script with chosen cereal
            echo shell_exec($awk_link);
       }


?>
