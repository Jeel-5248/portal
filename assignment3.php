<!-- Implement simple currency calculator utility-program, which can be used to calculate currency conversions from dollars to euros. Exchange rates can be found for example on http://www.x-rates.com/d/EUR/table.html. Implement simple HTML-form where user can input amount of dollars (currency.html) and PHP-script (calculate.php) to calculate currency conversion. PHP-script will read the input values from HTML-form and perform conversion by multiplying dollars with current exchange rate. -->

    <?php

require_once("../lib/common.php");
require_once("../lib/footer.php");
?>
<div class="mx-auto col-10 col-md-8 col-lg-6 ">
        <form action="" method="post" class='mt-5'>
            <input type='number' name='firstCurrancy' placeholder="your currancy in doller">
            <!-- <input type="number" name='Output' placeholder="you get" id='second'> -->
            <button type="submit" id='data'>change currancy</button>
        </form>
        <?php
        $a=$_POST['firstCurrancy'];
        echo "<h4 class='mt-4'>your currancy in dollar is:</h4><h5>$a</h5><br>";
        $b=$a*82.13;
        echo "your currancy in ruppe is:$b";
        ?>
     </body>
     <script>
// $(document).ready(function(){
//     $('#data').click(function(){
//         $('#second').show()
//         console.log('hey');
//     })
// })
            
        </script>
    