

<?php
error_reporting(0);
?>

<?php

function ch_number($number)
if ($number<0 || $number>9999) {return -1;}
$n_ones=array(1=>"I", 2=>"II", 3=>"III", 4=>"IV", 5=>"V",6=>"VI", 7=>"VII", 8=>"VIII", 9=>"IX");
$n_tens=array(1=>"X", 2=>"XX", 3=>"XXX", 4=>"XL", 5=>"L",6=>"LX", 7=>"LXX", 8=>"LXXX", 9=>"XC");
$n_hund=array(1=>"C", 2=>"CC", 3=>"CCC", 4=>"CD", 5=>"D", 6=>"DC", 7=>"DCC", 8=>"DCCC", 9=>"CM");
$n_thou=array(1=>"M", 2=>"MM", 3=>"MMM", 4=>"MMMM", 5=>"MMMMM",6=>"MMMMMM", 7=>"MMMMMMM", 8=>"MMMMMMMM", 9=>"MMMMMMMMM");

$ones_num = $number % 10;
$tens_num = ($number-$ones_num) % 100;
$hund_num = ($number-$tens_num-$ones_num) % 1000;
$thou_num ($number-$hund_num-$tens_num-$ones_num) % 10000;

$tens_num=$tens_num/10;
$hund_num=$hund_num/10;
$thou_num=$thou_num/10;

if($thou_num) {$re_number.=$n_thou[$thou_num];}
if($hund_num) {$re_number.=$n_hund[$hund_num];}
if($tens_num) {$re_number.=$n_tens[$tens_num];}
if($ones_num) {$re_number.=$n_ones[$ones_num];}

return $re_num;

$numeric=1601;
echo $numeric."numerele arabe =".ch_number($numeric)




?>
