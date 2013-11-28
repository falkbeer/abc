<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $test = "info@edv.biologie.uni-bonn.de";
        echo "Suchen in  Zeichenketten:";
        echo "<table border='1' >";
        echo "<tr> <td> Funktionen </td> <td> Erläuterungen </td> <td> Ergebnis </td></tr>";
        echo "<tr> <td> - </td> <td>Orginal:$test</td><td>-</td></tr>";
        
        $pos1= strpos($test,"@");
        echo "<tr><td>strpos</td> <td>Position des 1.Zeichens '@'</td> <td>$pos1</td></tr>";
        
        $pos2= strpos($test,".", $pos1+1);
        echo "<tr><td>strpos</td> <td>Position des 1.Punkts nach Zeichen '@'</td> <td>$pos2</td></tr>";
        
        $pos3= strrpos($test,".");
        echo "<tr><td>strrpos</td> <td>Position des letzten Zeichens 'Punkt'</td> <td>$pos3</td></tr>";
        
        
        ?>
    </body>
</html>



