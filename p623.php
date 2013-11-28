<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $fp=  fopen("p623data.txt","w");
        if (!$fp)
        {
            echo "Datei konnte nicht zum Schreiben geöffnet werden";
            exit;
        }
       
        $nl=chr(13) . chr(10);
        fputs ($fp, "Autor: Max Maier$nl");
        for ($i=10; $i<=50; $i+=10)
            fputs ($fp, "$i$nl");
        fputs($fp, "Autor: Max Maier",8);
        
        echo "Ausgabe in Datei geschrieben";
        fclose($fp);
        
        
        
        
        ?>
    </body>
</html>



