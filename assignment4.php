<?php

require_once("../lib/common.php");
require_once("../lib/footer.php");
?>
<div class="mx-auto col-10 col-md-8 col-lg-6 text-center mt-5">
<!-- Write a PHP script to get the server IP address. -->

<?php


$a= $_SERVER['REMOTE_ADDR'];
echo "<h2>server ip address is; </h2>$a"; 
  
?>