<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $tp=array(17.5, 19.2,21.8,21.6,20.2,12.6,123.9);
        $gr=sizeof($tp);
        
        $maxpos = 0;
        $minpos = 0;
        $max = $tp[0];
        $min = $tp[0];
        
         for($i=1;$i<$gr;$i++)
         
         {
             if($tp[$i] > $max)
             {
                 $max =$tp[$i];
                 $maxpos= $i;
             }
             if($tp[$i] < $min)
             {
             $min =$tp[$i];
             $minpos= $i;    
             }
         }
        
         
         for($i=0;$i<$gr;$i++)
         echo "<b>$i:</b> $tp[$i] &nbsp;<br /> ";
         echo "<br />Maxium: $max bei Position $maxpos <br />";
         echo "<br />Minimum: $min bei Position $minpos <br />";
         
         
         
        ?>
    </body>
</html>



