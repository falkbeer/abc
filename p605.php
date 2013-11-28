<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $erstername="Vivamus ac ipsum posuere, malesuada massa id, convallis eros. Aenean feugiat tristique sem, vulputate viverra metus eleifend nec. Suspendisse eleifend.Maier";
        $zweitername="Nulla at laoreet erat, quis luctus enim. Aliquam et consequat nunc! Suspendisse fringilla aliquam pulvinar. Nulla lacinia; odio eget vulputate.
Mertens";
        $drittername="maier";
        echo "<p> Mit Beachtung der Groß UND kLEINSCHREIBUNG (STRCMP): <br />";
        
        if (strcmp($erstername, $zweitername)<0)
                echo "$erstername steht vor $zweitername<br/> ";
            else {
                
            echo "$zweitername steht vor $erstername<br />";}
            
            if (strcmp($zweitername,$drittername)<0)
                echo "$zweitername steht vor $drittername<br/> ";
            else {
                
            echo "$drittername steht vor $zweitername<br />";}
            
            echo "<p> Ohne Beachtung der Groß UND kLEINSCHREIBUNG (STRCMP): <br />";
        
       
            
            if (strcasecmp($zweitername,$drittername)<0)
                echo "$zweitername steht vor $drittername<br/> ";
            else {
                
            echo "$drittername steht vor $zweitername<br />";}
            
            
        echo "Ähnlichkeit";
        $erg1= similar_text($erstername, $zweitername);
                echo $erg1;
        
            
        
        ?>
    </body>
</html>



