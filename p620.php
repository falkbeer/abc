<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        if(!file_exists("p620data.txt"))
        {
            echo "Datei konnte nicht gefunden werden" ;
            exit;
        }
        $fp= fopen("p620data.txt","r");
        if(!$fp)
        {
            echo "Datei konnte nicht geöffnet werden";
            exit;
        }
        
        $zeile=fgets($fp,100);
        echo"Inhalt der ersten Zeile der Datei p620date.txt: <br />$zeile";
        fclose($fp);
                
        
        ?>
    </body>
</html>



