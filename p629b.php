<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $fp = fopen("p628data.txt","r");
        if (!$fp)
        {
            echo " Datei konnte nicht zum Lesen geöffnet werden<p>";
            exit;
        }
        
        fseek($fp,($_POST["nummer"]-1)*6, SEEK_SET);
        $wert=  fgets($fp,7);
        fclose($fp);
        
        echo  $_POST["nummer"] . ": $wert" ;
        
        
        ?>
    </body>
</html>



