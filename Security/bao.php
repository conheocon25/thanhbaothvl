<?php
$var1 = " NGuyỄn THanh BẢO ";
$var1 = trim($var1);
$var1 = mb_convert_case($var1, MB_CASE_LOWER, "UTF-8"); 
echo $var1 . "<br />"; 
$var2 = "nguyễn thanh bảo";
$var2 = mb_convert_case($var2, MB_CASE_LOWER, "UTF-8"); 
echo $var2; 
if (strcmp($var1, $var2) == 0) {
    echo '$var1 is equal to $var2 in a case sensitive string comparison';
}
?>