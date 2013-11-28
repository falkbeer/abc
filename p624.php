<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        
        $fp=  fopen("p623data.csv","a");
        if (!$fp)
        {
            echo "Datei konnte nicht zum Schreiben geöffnet werden";
            exit;
        }
        
        fputs($fp,$_POST["nn"] . ";" 
        . $_POST["vn"] . ";" 
        . $_POST["sr"] . ";"
        . $_POST["hn"] . ";"
        . $_POST["pz"] . ";"
        . $_POST["st"] . ";\n");
        
        echo "<p> Vielen Dank, "  .$_POST["vn"] . "" . $_POST["nn"] . "<br />";
        echo "Ihre Angaben wurden gespeichert </p>" ;
            
fclose($fp);
        
        
                            
?>

<p> Zurück zur <a href="p624.html"> Eingabe</a></p> 



    </body>
</html>



