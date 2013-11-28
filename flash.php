<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        ming_useswfversion(5);
        $movie = new SWFMovie();
        $movie->setDimension(200,150);
        $movie->save("test.swf");
        ?>
    </body>
</html>



