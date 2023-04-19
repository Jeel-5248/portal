<?php

require_once("../lib/common.php");
require_once("../lib/footer.php");
?>
<div class="mx-auto col-10 col-md-8 col-lg-6 ">
<!-- Write a PHP program to check if a given positive integer is a power of two -->
<form class='mt-5' action='' method='post'>
        <div class="form-group d-flex justify-content-center">
  <lable>enter number:
        <input type='number' name='num' placeholder='one number' class='mt-4'  id="num"></lable>
         
        </div>
        
        <div class='text-center mt-5'>
            <button type='submit'>check</button>
        </div>
</form>
<?php
$num=$_POST['num'];
if(($num & ($num-1))==0){
    echo "$num is power of 2";
}
else{
    echo "$num is not power of 2";
}

?>