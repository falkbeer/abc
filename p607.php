<html>
    <head>
        <title>TODO supply a title</title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $test =$_POST["test"];
        echo "Original: $test<br />";
        $lg= strlen($test);
        echo "verschlüsselt: ";
        for($i=0;$i<$lg;$i++)
        
        {
        $char= substr($test, $i,1);
        $code= ord($char);
        $newcode=$code+1;
        $newschar=chr($newcode);
        echo $newschar;
        }
        
        
        ?>
    </body>
</html>



