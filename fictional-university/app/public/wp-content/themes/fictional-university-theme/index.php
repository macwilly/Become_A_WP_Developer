<?php
    function greet(string $name, string $color): void
    {
        $message = "<p>Hello my name is {$name}, my favorite color is {$color}!</p>";
        echo $message;
    }

    greet('John Doe', 'red');
    greet('Jane Doe', 'green');
?>
<!-- bloginfo gets the information from the Setting-> General area of WordPress-->
<!-- this is a WordPress Function -->
<h1><?php bloginfo('name');?></h1>
<p><?php bloginfo('description');?></p>