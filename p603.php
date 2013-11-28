<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
         $test = "info@rz.uni-bonn.de";
        echo "<p>Teil-Zeichenketten:</p>";
        echo "<table border='1' >";
        echo "<tr> <td> Nr. </td><td> Funktionen </td> <td> Erläuterungen </td> <td> Ergebnis </td></tr>";
        echo "<tr> <td> &nbsp;</td><td> - </td> <td>Orginal</td> <td>$test</td></tr>";
        
        $sub1= substr($test,3);
        echo "<tr><td>1</td> <td>substr</td> <td>ab Zeichen 3 bis Ende</td> <td>$sub1</td></tr>";
        
        $sub2= substr($test,3,5);
        echo "<tr><td>2</td> <td>substr</td> <td>ab Zeichen 3,dann 5 Zeichen lang</td> <td>$sub2</td></tr>";
        
        $sub3= substr($test,-5);
        echo "<tr><td>3</td> <td>substr</td> <td>ab 5. letztem Zeichen bis Ende</td> <td>$sub3</td></tr>";
        
        $sub4= substr($test,-5,2);
        echo "<tr><td>4</td> <td>substr</td> <td>ab 5. letztem Zeichen dann 2 Zeichen</td> <td>$sub4</td></tr>";
        
        $domain= strstr($test,"@");
        echo "<tr><td>5</td> <td>substr</td> <td>ab Zeichen @ bis Ende</td> <td>$domain</td></tr>";
        
        $country= strrchr($test,".");
        echo "<tr><td>6</td> <td>substr</td> <td>ab letztem Punkt bis Ende</td> <td>$country</td></tr>";
        
        ?>
    </body>
</html>



