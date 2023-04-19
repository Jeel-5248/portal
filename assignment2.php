<?php

require_once("../lib/common.php");
require_once("../lib/footer.php");
?>
<div class="mx-auto col-10 col-md-8 col-lg-6 text-center ">
<!-- Write a PHP program to compute and return the square root of a given number -->
<div class='border border-dark border-3 mt-5 mb-5 h-75 text-center'>
<form action='' method='post' class='mt-5  '>
    <div class='form-grouup'>
        <lable for='num'>num:</lable>
        <input type="text" placeholder="enter number" id='num' name='num'>
        <button type='submit'>submit</button>
    </div>
</form>
<?php
$a=$_POST['num'];
echo "your number is:$a<br>";

$b=sqrt($a);
echo (" sqrt of $a is $b")
?>
</div>
