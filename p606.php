<html>
    <head>
        <title>ASCII CODE</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $t_start = array_sum(explode(' ', microtime()));
        echo "<table border=1 bgcolor=' #e2e2e2'  bordercolor='#0000ff' >";
        
        for ($i=1; $i<3004;$i++)
        
        {
            echo"<tr>";
            
            for ($k=0;$k<8;$k++)
            {
                echo "<td align='right'>" . ($i*8+$k)
                        . ":</td><td><b>"  . chr($i*8+$k)
                        .   "</b></td>" ;
            }
            
            echo "</tr>";
            
        }
        
        echo "</table>";
        
        
        
        $exec_time = array_sum(explode(' ', microtime())) - $t_start;
        echo ("Execution time is $exec_time seconds.");
        
        ?>
        
    </body>
</html>



