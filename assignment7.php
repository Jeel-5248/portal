<?php

require_once("../lib/common.php");
require_once("../lib/footer.php");
?>
<div class="mx-auto col-10 col-md-8 col-lg-6 text-center mt-5 ">
<!-- Write a PHP script to get the current file name. -->

<?php


$a= $_SERVER['PHP_SELF'];
echo "<h2>you are in file $a</h2>"; 
  
?>