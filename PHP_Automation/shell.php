<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
         $output = shell_exec('curl --silent http://edge.cdn.youtv.de/1867271/2016-04-18_18-15_Heidi_der-kinderkanal_nq.mp4 > test.mp4');
         echo "<pre>$output</pre>";
        ?>
    </body>
</html>