<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        srand((double)microtime()*1000000);
        $fp = fopen("p628data.txt","w");
        
        if (!$fp){
            echo "Datei kann nicht zum Schreiben geöffnet werden";
            exit;
        }
        
       for($i=1;$i<=15;$i++){
           $zz=rand(1,30000);
           $zztext = sprintf("%6d",$zz);
           fputs($fp,$zztext);
       }
               
      fclose($fp);
      echo "15 Daten geschrieben";
       
        ?>
    </body>
</html>



