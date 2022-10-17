    
    <?php
        $title = 'Index';
        include 'includes/header.php'     
    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php 
        //Printing to HTML Using echo
        echo 'Hello PHP!';
        // You can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    
        //  Variables need a '$'. They are not strongly typed
        $name = 'Kennando Spence';
        $age = 35;
        //  echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';
        // Echo using double quotes and interpolation
        echo '<h1>My Name is: '.$name.' </h1> ';
    ?>
    <button type="button" class="btn btn-dark">Click Me!</button>
    <button type="button" class="btn btn-primary">Click Me!</button>
    <button type="button" class="btn btn-success">Click Me!</button>

    <?php
        require 'includes/footer.php' 
     ?>