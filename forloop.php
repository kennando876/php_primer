
<?php
    $title = "Forloop";
    include 'includes/header.php' 
?>
    <h1>For Loops</h1>
<?php
    // For Loops 
    for($count = 0; $count < 10; $count++){
        echo '<p>HELLO WORLD</P>';
    }

    for($count = 0; $count < 10; $count++){
        echo "<p>The Count is: $count</p>";
    }
?>
<?php require 'includes/footer.php' ?>

