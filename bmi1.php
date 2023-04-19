<?php

require_once("../lib/common.php");
require_once("../lib/footer.php");
?>
<div class="mx-auto col-10 col-md-8 col-lg-6 ">
<!-- weight / (height * height) -->
<div class='detail d-flex justify-content-center mt-5'>

</div>
<?php
$a=$_POST['weight'];
$b=$_POST['height'];
$c=$a/($b*$b);
echo "<span>your Body Mass Index is</span>:$c"
?>
