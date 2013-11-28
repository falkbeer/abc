<html>
    <head>
        <title>TODO supply a title</title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $t_start = array_sum(explode(' ', microtime()));
        $exec_time = array_sum(explode(' ', microtime())) - $t_start;
        echo ("Execution time is $exec_time seconds.");
        
        
        $test =$_POST["test"];
        echo "Ihr Satz: $test<br />";
        
        echo "CRC32-Prüfsumme: " . crc32($test) . "<br />";
        echo "DES_Verschlüssung, mit Salt-Zeichenkette: " . crypt($test,"xy") . "<br />";
        echo "MD5-Verschlüssung: " .   md5($test) . "<br />";
        echo "ROT13-Verschlüssung: " . str_rot13($test) . "<br /><br />";
        
       
        
        ?>
    </body>
</html>



