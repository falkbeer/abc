<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $tp=array(17.5, 19.2,21.8,21.6,20.2,12.6);
        $gr=sizeof($tp);
        
        for($i=0;$i<$gr;$i++)
        echo "$tp[$i] &nbsp;";
        echo "Array hat " . $gr . " Felder";
        echo " unsortiert <br />";
        
        sort($tp,SORT_NUMERIC);
        for($i=0;$i<$gr;$i++)
        echo "$tp[$i] &nbsp;";
        echo "Array hat " . $gr . " Felder";
        echo " aufsteigend sortiert <br />";
        
        rsort($tp,SORT_NUMERIC);
        for($i=0;$i<$gr;$i++)
        echo "$tp[$i] &nbsp;";
        echo "Array hat " . $gr . " Felder";
        echo " absteigend sortiert <br />";
        
        
        
        
        
        ?>
    </body>
</html>



