<html>
<?php
$t1 = 'php';
$t2 = 'User';
$a = 1;
$b = 2;
?>
<!-- задание #4 -->
<head>
    <title><?php echo "Пример использования $t1!";?></title>
</head>

<body>

<h1>
<?php echo "Привет, $t2";?>
</h1>
    
<!-- задание #5 -->
<?php
	$a = $a + $b;
	$b = $b - $a;
	$b = -1*$b;
	$a = $a - $b;
 ?>
<?php echo '<div>'."Пере $a".'</div>';?>
<div>
	<?php echo "Переменная b = $b";?>
</div>
</body>
</html>