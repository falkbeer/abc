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
        
        readfile("p620data.txt");
        
        $dfeld =  file("p620data.txt");
        echo "<p> </p>";
        for($i=0;$i<sizeof($dfeld);$i++)
        echo $dfeld[$i] . "<br />";
        ?>
    </body>
</html>



