
<?php 
    $title = "Daateandtimemanip";
    include 'includes/header.php' 
?>
    <h1>Date and Time Manipulation</h1>
    <?php
    $datenow = getdate();
        echo    "Today's Date <br/>";
        echo    $datenow['mday'] . '<br/>';
        echo    $datenow['mon']. "<br/>";
        echo    $datenow['year']. "</p>";

        echo "Today's Date:" .  $datenow['mday'] . '/' .  $datenow['mon'] . '/'.  $datenow['year']. '<br/>';
        
        echo time() . '<br/r>';


        print date("m/d/y  G.i:s<br>", time())  .  '<br/r>';
        print "Today is  ";
        print date("j of F Y, \a\\t  g.i  a", time());
    ?>
<?php require 'includes/footer.php' ?>