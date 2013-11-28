<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $test = $_POST["test"];
        echo "<p>Umwandlungsfunktionen:</p>";
        echo "<table border='1' >";
        echo "<tr> <td> Funktionen </td> <td> Erläuterungen </td> <td> Ergebnis </td></tr>";
        echo "<tr> <td> - </td> <td>Orginal</td> <td>$test</td></tr>";
        
        $lg=  strlen($test);
        echo "<tr> <td>strlen</td> <td>Rückgabe der String-Länge</td> <td>$lg</td></tr>";
        
        $kl= strtolower($test);
        echo "<tr> <td>strtolower</td> <td>String-Ausgabe alles klein</td> <td>$kl</td></tr>";
        
        $gr= strtoupper($test);
        echo "<tr> <td>strtoupper</td> <td>String-Ausgabe alles groß</td> <td>$gr</td></tr>";
        
        $uf= ucfirst($test);
        echo "<tr> <td>ucfirst</td> <td>erstes Zeichen groß</td> <td>$uf</td></tr>";
        
        $uw= ucwords($test);
        echo "<tr> <td>ucwords</td> <td>erstes Zeichen jedes Worts groß</td> <td>$uw</td></tr>";
        
        $rv= strrev($test);
        echo "<tr> <td>strrev</td> <td>umdrehen</td> <td>$rv</td></tr>";
        
        $tr= strtr($test,"ao","AO");
        echo "<tr> <td>strtr</td> <td>a und o ersetzt durch A und O</td> <td>$tr</td></tr>";
        
        $rp= str_replace("hallo","hi",$test);
        echo "<tr> <td>str_replace</td> <td>hallo ersetzt durch hi</td> <td>$rp</td></tr>";
        echo "</table";
        ?>
    </body>
</html>



