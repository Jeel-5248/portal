<?php

require_once("../lib/common.php");
require_once("../lib/footer.php");
?>
<div class="mx-auto col-10 col-md-8 col-lg-6 ">
    <h3 class='mt-5 text-center'>which animal is this?</h3>
    <form action='' method='post'>
    <div class="d-flex justify-content-center">
<div>
<img class='mt-5' src='<?php SITE_URL;?>https://images.ctfassets.net/hrltx12pl8hq/5qusjAtcAaetdPsing4jR6/2db2f75abd2840caa09d21312b4fc6c8/animals-wildlife-shutterstock_1066200380.jpg?fit=fill&w=480&h=320'>
</div>
<div class='mt-5 mx-5 text-center'>
<div class="form-check mt-5">
  <input class="form-check-input" type="radio" name="animal" id="animal1" value='giraf' >
  <label class="form-check-label" for="animal1" >
    giraf
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="animal" id="animal2" value='lion' >
  <label class="form-check-label" for="animal2">
   lion
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="animal" id="animal2"  value='tiger'>
  <label class="form-check-label" for="animal2">
   Tiger
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="animal" id="animal2" value='cow' >
  <label class="form-check-label" for="animal2">
   Cow
  </label>
</div>
</div>
</div>
<div class='text-center'>
<input type="submit" name="submit" class='btn btn-primary mt-5' vlaue="Get Values">
</div>
</form>

<?php
    // if(isset($_POST['submit'])){
    // if(!empty($_POST['animal'])) {
    //     echo '  ' . $_POST['animal'];
    // } else {
    //     echo 'Please select the value.';
    // }
    // }
    $a= $_POST['animal'];
    
    if ($a=='lion'){
        echo "<div class=text-center><div class='mt-5 ml-5  w-50'>your answer is correct</div></div>";
    }
    else{
        echo "<div class=text-center><div class='mt-5 ml-5  w-50'>your answer is incorrect</div></div>";
    }
?>
    

  
    <!-- <form action="" method="post">
    <label>
        <input type="radio" name="radio" value="Lock & Key">Lock & Key
    </label>
    <label>
        <input type="radio" name="radio" value="Umbrella Academy">Umbrella Academy
    </label>
    <label>
        <input type="radio" name="radio" value="Stranger Things">Stranger Things
    </label>
    <label>
        <input type="radio" name="radio" value="Ozark">Ozark
    </label>
    <input type="submit" name="submit" vlaue="Get Values">
</form> -->
