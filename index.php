<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";


$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo '<br>';

echo'2.';
$date = str_replace("-", "/", $date);
print_r ($date);
echo "<br>";

echo "3.";
$now = strtotime($date);
$target = strtotime($tar);
if($now>$target)
echo  "The future";
elseif($now<$target)
echo "the past";
else 
echo "Oops!";
echo "<br>";


echo '4.The pos: ';

for ($i=0; $i<strlen($date); $i++){ 
if ($date[$i]=="/") {
echo " ".$i;
$date[$i]=" ";
}
}
echo "    ". $date;

echo "<br>";

echo "5.";
echo str_word_count($date);
echo "<br>";

echo "6. The length of '$date' is " . strlen($date). "<br>";
echo "7. The ASCII value of \$date is ". ord($date). "<br>";

echo "8. The last two characters of \$date is ". substr($date, -2). "<br>";

echo "9. ";
print_r(explode(" ", $date));
echo "<br>";

echo "10. ";
foreach ($year as $value) {
switch ($value % 4==0 && $value % 100!==0 or $value % 400==0){
case 0: echo $value. " is not a leap year!  /   "; break;
case 1: echo $value." is a leap year! /    "; break;}
}
echo '<br>';

for($i=0; $i<count($year); $i++) {
switch ($year[$i] % 4==0 && $year[$i] % 100!==0 or $year[$i] % 400==0){
case 0: echo $year[$i]. " is not a leap year!  /   ";break;
case 1: echo $year[$i]. " is a leap year! /    ";break;
}
}


?>
