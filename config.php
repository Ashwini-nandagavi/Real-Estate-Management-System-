<?php
   $connect=mysqli_connect("localhost","root","","paradise");
   if(!$connect)
   {
    die("could not mysqli Database".mysqli_error());
    
   }

?>