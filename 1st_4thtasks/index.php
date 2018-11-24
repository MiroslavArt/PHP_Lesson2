<html>
<?php
$a = 10;
$b = -2;
$c = 1;
?>
<!-- задание #4 -->
<head>
    <title><?php echo "Задания 1_4!";?></title>
</head>
<body>
<?php echo '<h2>'."Первое задание".'</h2>';?>
<div>
<?php
	echo "Результат ";
	if ($a>0 && $b>0)
		echo $a-$b;
	elseif ($a<0 && $b<0)
		echo $a*$b;
	else
		echo $a+$b;
?>
</div>
<?php echo '<h2>'."Второе задание".'</h2>';?>
<div>
	<?php 
	switch ($c) {
		case '1':
			echo "2 3 4 5 6 7 8 9 10 11 12 13 14 15";
			break;	
		case '2':
			echo "3 4 5 6 7 8 9 10 11 12 13 14 15";
			break;	
		case '3':
			echo "4 5 6 7 8 9 10 11 12 13 14 15";
			break;	
		case '4':
			echo "5 6 7 8 9 10 11 12 13 14 15";
			break;	
		case '5':
			echo "6 7 8 9 10 11 12 13 14 15";
			break;	
		case '6':
			echo "7 8 9 10 11 12 13 14 15";
			break;	
		case '7':
			echo "8 9 10 11 12 13 14 15";
		case '8':
			echo "9 10 11 12 13 14 15";
		case '9':
			echo "10 11 12 13 14 15";
		case '10':
			echo "11 12 13 14 15";
		case '11':
			echo "12 13 14 15";
		case '12':
			echo "13 14 15";	
			break;	
		case '13':
			echo "14 15";	
			break;	
		default:
			echo "15";
			break;
		}
	?>
</div>
<?php echo '<h2>'."Третье и четвертое задание".'</h2>';?>
<div>
<?php
	function slozhenie($x,$y)
	{
		return $x+$y;
	}
	function vichitanie($x,$y)
	{
		return $x-$y;
	}
	function umnozhenie($x,$y)
	{
		return $x*$y;
	}
	function delenie($x,$y)
	{
		return $x/$y;
	}
	function mathOperation($arg1, $arg2, $operation)
	{
		switch ($operation) {
			case 's':
				return slozhenie($arg1,$arg2);
				break;
			case 'v':
				return vichitanie($arg1,$arg2);
				break;
			case 'u':
				return umnozhenie($arg1,$arg2);
				break;
			default:
				return delenie($arg1,$arg2);
				break;
		}
	}
	echo mathOperation(10,5,d);
?>
</div>
</body>
</html>