
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        
        $test ="Dies|ist|ein|kurzer|Satz|!";
        $worte = explode("|", $test);
        $lg = sizeof($worte);
        for($i=0;$i<$lg;$i++)
        {
            echo "Wort $i: $worte[$i]</br> "; 
        }
        echo "<p> </p>";
        
        $feld =array(17.5,19.2,21.8,21.6,17.5);
        $test = implode(";" , $feld);
        echo "Eine Zeichenkette: </br>$test";
        
        
        
        
        
        ?>
    </body>
</html>



