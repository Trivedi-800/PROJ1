<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$price =$_POST['price'];
$discount =$_POST['discount'];
$tax_rate=$_POST['tax'];
$discounted_price=$price -$discount;

$final_price=$discounted_price+($discounted_price*($tax_rate/100));
echo"<h2>Calculation Result</h2>";
echo"Original price:$".number_format($price,2)."<br>";
echo"discounted price:$".number_format($discounted_price,2)."<br>";
echo"Final Price after Tax:$".number_format($final_price,2);
}
else{
    echo"invalid request!";
}
?>
