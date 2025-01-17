<?php
 $names = array("Brad", "John", "Jane", "Meowsalot");
 $count = 0;
 // The while loop is what WordPress uses to loop through the different blog posts
//     and pages that it has.
 while($count < count($names)) {
     echo "<p>Hi, my name is " . $names[$count] . ".</p>";
     $count++;
 }

 ?>

