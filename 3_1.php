<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="utf-8"/>
    <meta name="author" content="Горбачева У.А."/>
    <meta name="viewport" content="width=device-width"/>
    <meta name="description" content="Первый php скрипт. Дана строна квадрата a. Найти площадь S=a^2.">
    <meta name="keywords" content="php, script, echo, html">
    <title>Первый скрипт</title>
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
		<h1>Вычисление площади квадрата</h1>
		<form method="post">
			<label style="font-size: 18px">Введите значение стороны a:</label>
			<input type="number" name="side_a" required style="border: 1px solid #91a7bf;
															   border-radius: 10px;">
			<input type="submit" value="Вычислить" style="background-color: #313e4d;
														  border-radius:20px;
														  border: none;
														  padding: 10px;
														  color: white">
		</form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $side_a = $_POST['side_a'];

        if ($side_a > 0) {
            $area = $side_a * $side_a;
            echo "<h2>Площадь квадрата со стороной $side_a равна $area.</h2>";
        } else {
            echo "<h2>Некорректное значение ($side_a). Введите положительное число!</h2>";
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

