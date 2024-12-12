<?php
  session_start();
  echo "welcome ". $_SESSION['username'] ;
  echo "<br> your favorite category is a ". $_SESSION['favcat'];
  echo "<br>";
 


?>