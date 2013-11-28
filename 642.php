<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        
        if(!file_exists("p642data.txt"))
        {
            echo "Datei nicht da!!";
            exit;
        }
        
        $fp = fopen("p642data.txt","r");
        if(!$fp)
        {
            echo "Datei konnte nicht geöffent werden";
            exit;
        }
        
        $i=0;
        while (!feof($fp))
        {
            $zeile =fgets($fp,100);
            $tp[$i]=  doubleval($zeile);
            $i++;
            
            
        }
        
        fclose($fp);
        
        $anzahl = sizeof($tp);
        
        $c=0;
        
        $grenze= doubleval($_POST["gr"]);
        for ($i=0; $i<$anzahl; $i++)
                if ($tp[$i]>$grenze)
                    $c++;
                if ($anzahl >0)
                {
                    $anteil = $c /$anzahl *100;
                    $ausgabe = number_format($anteil,2);
                    echo "$ausgabe Prozent der Werte liegen oberhalb von $grenze";
                    
                }
                else
                    echo "Die Datei beinhaltet keine Werte";
        
        ?>
    </body>
</html>



