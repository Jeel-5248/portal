<?php

require_once("../lib/common.php");
require_once("../lib/footer.php");
?>
<div class="mx-auto col-10 col-md-8 col-lg-6 ">
<div class="d-flex justify-content-center mt-5">
<?php
if (!empty($_SERVER['HTTPS'])) 
{
  echo "<h1>https is enabled</h1><br>";
}
else
{
echo "<h2>http is enabled</h2>";
}
?>
    </div>