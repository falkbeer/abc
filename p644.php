<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        function ausgabe($tpfunc, $kommentar){
            foreach($tpfunc as $name=>$wert)
                
                echo "$name: $wert &nbsp;";
            echo "$kommentar<br />";
        }
        
        $tp["Mo"] = 17.5;
        $tp["Di"] = 19.2;
        $tp["Mi"] = 21.8;
        $tp["Do"] = 21.6;
        $tp["Fr"] = 17.5;
        $tp["Sa"] = 20.2;
        $tp["So"] = 16.6;
        
        ausgabe($tp, "unsortiert");
        asort($tp, SORT_NUMERIC);
        ausgabe($tp, "aufsteigend nach Werten");
        ksort($tp,SORT_STRING);
        ausgabe($tp, "aufsteigend nach Keys");
        krsort($tp,SORT_STRING);
        ausgabe($tp, "absteigend nach Keys");
        
        
        
        
        
        ?>
    </body>
</html>



