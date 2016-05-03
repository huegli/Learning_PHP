<html>
    <title>
        Countdown to my 46th Birthday
    </title>
    <body>
        <?php
        $target = mktime(0,0,0,9,30,2016);
        $today = time();
        $difference = ($target-$today);
        $days = (int)($difference/86400);
        print "My 46th Birthday will occur in $days days";
        ?>
    </body>
</html>