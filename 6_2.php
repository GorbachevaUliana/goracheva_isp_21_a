<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="utf-8"/>
    <meta name="author" content="Горбачева У.А."/>
    <meta name="viewport" content="width=device-width"/>
    <meta name="description" content="Второй php скрипт. Дана  матрица  размера  M ×  N.  Поменять  местами  столбцы,
	содержащие минимальный и максимальный элементы матрицы.">
    <meta name="keywords" content="php, script, echo, html">
    <title>Второй скрипт</title>
  </head>
  <body style="background-color:#d3e0f0;
			   font-family: 'Nunito', sans-serif;
			   color: #173245">
	<header>
		<img src="/img/2.jpg" width="100%" height="200px" style="border-radius: 0 0 30px 30px"/>
	</header>
	<div style="background-color: white; 
				border-radius: 20px;
				position: absolute;
				top: 250px;
				bottom: 120px;
				left: 100px;
				right: 100px;
				padding: 70px 0 0 25%">
		<h1>Двумерные массивы. Формирование матрицы</h1>
		<form method="post">
			<label style="font-size: 18px">Введите значения M и N:</label>
			<input type="number" placeholder="M" name="M" required style="border: 1px solid #91a7bf;
															   border-radius: 10px;">
			<input type="number" placeholder="N" name="N" required style="border: 1px solid #91a7bf;
															   border-radius: 10px;">
			<input type="submit" value="Вычислить" style="background-color: #313e4d;
														  border-radius:20px;
														  border: none;
														  padding: 10px;
														  color: white">
		</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$M = $_POST['M'];
		$N = $_POST['N'];
		
		if ($M > 0 && $N > 0) {
			$matrix = array();

			for ($i = 0; $i < $M; $i++) {
				$matrix[$i] = array();
				for ($j = 0; $j < $N; $j++) {
					$matrix[$i][$j] = rand(0, 100);
				}
			}

			for ($i = 0; $i < $M; $i++) {
				for ($j = 0; $j < $N; $j++) {
					echo $matrix[$i][$j] ."\t";
				}
				echo "<br/>";
			}
			
			$minCol = 0;
			$maxCol = 0;
			$minValue = $matrix[0][0];
			$maxValue = $matrix[0][0];

			for ($i = 0; $i < $M; $i++) {
				for ($j = 0; $j < $N; $j++) {
					if ($matrix[$i][$j] < $minValue) {
						$minValue = $matrix[$i][$j];
						$minCol = $j;
					}
					if ($matrix[$i][$j] > $maxValue) {
						$maxValue = $matrix[$i][$j];
						$maxCol = $j;
					}
				}
			}

			for ($i = 0; $i < $M; $i++) {
				$temp = $matrix[$i][$minCol];
				$matrix[$i][$minCol] = $matrix[$i][$maxCol];
				$matrix[$i][$maxCol] = $temp;
			}

			echo "Матрица после замены столбцов:<br/>";
			foreach ($matrix as $row) {
				echo implode(" ", $row) . "<br/>";
			}
		}
	}
	?>

	</div>
	<footer style="background-color: #313e4d;
				   border-radius: 30px 30px 0 0;
				   height: 70px;
				   position: absolute;
				   bottom: 0px;
				   left: 100px;
				   right: 100px">
		<p style="text-align: center;
				  color: white;">Все права защищены<p>
	</footer>
</body>
</html>

