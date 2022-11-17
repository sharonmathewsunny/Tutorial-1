<html>
<body>

<?php
$numbers = array(40, 61, 2, 22, 13);
sort($numbers);

$arrlength = count($numbers);
echo "The ascending order is:";
echo "<br>";

for($x = 0; $x < $arrlength; $x++) {
	echo $numbers[$x];
	echo "<br>";
}

echo "<br>";
rsort($numbers);
  
$arrlength = count($numbers);
echo "The descending order is:";
echo "<br>";

for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
?>

</body>
</html>
