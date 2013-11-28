<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        
        <?php
        $fn = "p628data.txt";
        $info= stat($fn);
        echo "Datei : $fn <br />";
        echo "Größe in Byte: $info[7] <br />";
        echo "Datum des letzten Zugrifs:" . date("d.m.Y",$info[8]) ." <br/>" ;
        echo "Modifizierung:" . date("d.m.Y H:i:s",$info[9]) ." <br/>" ;
        echo "Letzte Änderung:" . date("d.m.Y H:i:s" ,$info[10]) ." <br/>" ;
        echo "Hallo";
      
            if (extension_loaded("ming"))
                echo "ok";
            else
                echo"nicht da";
        ?>
    </body>
</html>



