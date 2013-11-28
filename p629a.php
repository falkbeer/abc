<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        if(!file_exists("p628data.txt"))
        {
            echo"Datei konnte nicht gefunden werden";
            exit;
        }
        
        ?>
        <p>Wählen Sie die Nummer des gewünschten Datensatzes aus:</p>
        <form action="p629b.php" method="post">
            <p><select name="nummer" />
               <?php
               $anz=  filesize("p628data.txt")/6;
               for($i=1;$i<=$anz;$i++)
               {
                   echo "<option value='$i'>$i</option>";
               }
               ?>
                </select></p>
                <p><input type ="submit" value="Absenden" /></p>
                
            
        </form>
    </body>
</html>



