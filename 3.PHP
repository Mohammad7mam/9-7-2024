
<!-- 1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111 -->

<?php
 echo "1. <br><br>"; 
$color = array('red', 'green', 'white');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the. $color[0]
carpet, the $color[1] lawn, .the $color[2] house, the leaden sky. The new president and his first lady. -
Richard M. Nixon";
?>
<!-- 222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222-->
 <?php
  echo "2. <br><br>"; 

$color = array('red', 'green', 'white');

echo " <ul>
<li>$color[0]</li>
<li>$color[1]</li>
<li>$color[2]</li>
</ul> ";
?>
<!-- 333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333-->

<?php
 echo "3. <br><br>"; 

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid" );

asort($cities);
foreach($cities as $x=>$x_v)
echo "The capital of $x is $x_v";
echo"<br>";

  ?>
  <!-- 4444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444 -->
<?php
 echo "4. <br><br>"; 

 $color = array (4 => 'white', 6 => 'green', 11=> 'red');
foreach($color as $x=>$x_v)
if ($x == 4) 
  break;
echo  "$x_v";

echo"<br>";

?>
<!-- 5555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555 -->
<?php echo "5. <br><br>";
$nArray = array();
function Add($nArray, $addValue, $Location)
{
    array_splice($nArray, $Location - 1, 0, $addValue);
    print_r($nArray);
    echo '<br>';
    for ($i = 0; $i < count($nArray); $i++) {
        echo $nArray[$i] . " ";
    }
};
Add([1, 2, 3, 4, 5], "$", 4);
echo "<br><br>";
?>
<!--  6666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666-->
  <?php
 echo "6. <br><br>"; 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"
);
ksort($fruits );
foreach($fruits as $x=>$x_v){
echo  "$x = $x_v";
echo"<br>";
}

?>
<!-- 777777777777777777777777777777777777777777777777777777777777777777777777777777777777 -->
<?php
 echo "7. <br><br>"; 

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73";

$temp_array = explode(',', $month_temp);

$tot_temp = 0;
$temp_array_length = count($temp_array);

foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}

$avg_high_temp = $tot_temp / $temp_array_length;

echo "Average Temperature is : " . $avg_high_temp . "";

sort($temp_array);

echo " List of five lowest temperatures :";
for ($i = 0; $i < 5; $i++)
{ 
    echo $temp_array[$i] . ", ";
}

echo "List of five highest temperatures :";
for ($i = ($temp_array_length - 5); $i < $temp_array_length; $i++)
{
    echo $temp_array[$i] . ", ". "\n";
}
echo"<br><br>";

?>
<!-- 888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888 -->

<?php
echo "8. <br><br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$mergedArray = array_merge($array1, $array2);

print_r($mergedArray);
echo '<br><br>';
?>

<!-- 99999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999-->
 <?php 
 echo "9. <br><br>"; 

function upper($array){
    $newArray =[];
for($i=0; $i<count($array); $i++){
    array_push($newArray,strtoupper($array[$i]));
}
print_r($newArray);
}
upper(["red","blue","white","yellow"]);
echo '<br><br>';
?>

<!-- 10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-10-->
 <?php 
 echo "10. <br><br>"; 

function lower($array){
    $newArray =[];
for($i=0; $i<count($array); $i++){
    array_push($newArray,strtolower($array[$i]));
}
print_r($newArray);
}
lower(["RED","BLUE", "WHITE","YELLOW"]);
echo '<br><br>';
?>

<!-- 11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11-11 -->
<?php
echo implode(",", range(200, 250, 4)) . "\n". "<br>";
?>
<!-- 12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12-12 -->
<?php
 echo "12. <br><br>"; 

$my_array = array("abcd", "abc", "de", "hjjj", "g", "wer");

$new_array = array_map('strlen', $my_array);

echo "The shortest array length is " . min($new_array) .
    ". The longest array length is " . max($new_array) . '.' . "<br>";

?>
<!-- 13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13-13--->
<?php
 echo "13. <br><br>"; 

$n = range(11, 20);

shuffle($n);

for ($x = 0; $x < 10; $x++)
{
    echo $n[$x] . ' ';
}

echo "<br>";

?>

<!-- 14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-14-->

<?php
 echo "14. <br><br>"; 

function min_values_not_zero(Array $values)
{
    return min(array_diff(array_map('intval', $values), array(0)));
}

print_r(min_values_not_zero(array(2, 0, 10, 12, 6)) . "\n");
?>

<!-- 15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-15-->
<?php
 echo "15. <br><br>"; 

function columns($uarr)
{
    $n = $uarr;

    if (count($n) == 0)
        return array();
    else if (count($n) == 1)
        return array_chunk($n[0], 1);

    array_unshift($uarr, NULL);

    $transpose = call_user_func_array('array_map', $uarr);

    return array_map('array_filter', $transpose);
}

function bead_sort($uarr)
{
    foreach ($uarr as $e)
        $poles [] = array_fill(0, $e, 1);

    return array_map('count', columns(columns($poles)));
}

echo 'Original Array : ' . '';

print_r(array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3));

echo '
'.'After Bead sort : ' . '';

print_r(bead_sort(array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3)));
?>
<!-- 16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-16-->
<?php
 echo "16. <br><br>"; 

function floorDec($number, $precision, $separator)
{
    $number_part = explode($separator, $number);

    $number_part[1] = substr_replace($number_part[1], $separator, $precision, 0);

    if ($number_part[0] >= 0) {
        $number_part[1] = floor($number_part[1]);
    }
    else {
        $number_part[1] = ceil($number_part[1]);
    }

    $ceil_number = array($number_part[0], $number_part[1]);
    return implode($separator, $ceil_number);
}

print_r(floorDec(1.155, 2, ".") . "\n");
print_r(floorDec(100.25781, 4, ".") . "\n");
print_r(floorDec(-2.9636, 3, ".") . "\n");
?>
<!-- 17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17-17- -->
<?php
 echo "17. <br><br>"; 

$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

$result = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));

echo $result."\n";
?>
<!-- 18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18-18- -->
<?php
echo "18. <br><br>"; 

function array_uniq($my_array, $value) 
{ 
    $count = 0; 
    
    foreach($my_array as $array_key => $array_value) 
    { 
        if (($count > 0) && ($array_value == $value)) 
        { 
            unset($my_array[$array_key]); 
        } 
        
        if ($array_value == $value) $count++; 
    } 
    
    return array_filter($my_array); 
} 

$numbers = array(4, 5, 6, 7, 4, 7, 8);

echo(array_uniq($numbers, 7));
?>
<!-- 19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19-19- -->
<?php
 echo "19. <br><br>"; 
function isSubset($array1, $array2) {
    $diff = array_diff($array2, $array1);
    
    if (empty($diff)) {
        return "array2 is a subset of array1";
    } else {
        return "array2 is not a subset of array1";
    }
}

$array1 = array('a', '1', '2', '3', '4');
$array2 = array('a', '3');

echo isSubset($array1, $array2);
?>
