<!DOCTYPE html>
<html>
<head>
	<title>Reg</title>
	<h1 align="center">Reg</h1>
</head>
<body>
	<?php include "functions.php"; ?>
	<p>Задание1: Из полного имени файла (например, picture.jpg) получите его расширение (например, jpg)</p> 
	<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST"> 
		<p><input placeholder="Введите" name="id1"></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['id1'])){ 
			$var=$_POST['id1']; 
			echo task1($var); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
	</div>

	<p>Задание2: По полному имени файла проверьте соответствует ли оно: а) архиву, б) аудиофайлу, в) видеофайлу, г) картинке</p> 
	<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST"> 
		<p><input placeholder="Введите" name="id2"></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['id2'])){ 
			$var=$_POST['id2']; 
			echo task2($var); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
	</div>

	<p>Задание3: В произвольном HTML-коде найдите строку, заключенную в теги title</p> 
	<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST"> 
		<p><textarea placeholder="Введите" name="id3"></textarea></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['id3'])){ 
			$var=$_POST['id3']; 
			echo task3($var); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
	</div>

	<p>Задание4: В произвольном HTML-коде найдите все ссылки в тегах a (атрибут href)</p> 
	<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST"> 
		<p><textarea placeholder="Введите" name="id4"></textarea></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['id4'])){ 
			$var=$_POST['id4']; 
			echo task4($var); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
	</div>

	<p>Задание5: В произвольном HTML-коде найдите все ссылки на картинки в тегах img (атрибут src)</p> 
	<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST"> 
		<p><textarea placeholder="Введите" name="id5"></textarea></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['id5'])){ 
			$var=$_POST['id5']; 
			echo task5($var); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
	</div>

	<p>Задание6: В произвольном тексте найдите и подсветите с помощью тега strong заданную строку</p> 
	<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST"> 
		<p><textarea placeholder="Введите где найти" name="id61"></textarea></p> 
		<p><textarea placeholder="Введите что найти" name="id62"></textarea></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['id61']) && isset($_POST['id62'])){ 
			$var=$_POST['id61'];
			$text=$_POST['id62']; 
			echo task6($var, $text); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
	</div>

	<p>Задание7: В произвольном тексте найдите определенный набор текстовых смайликов :), ;), :(на соответствующие им картинки</p> 
	<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST"> 
		<p><textarea placeholder="Введите" name="id7"></textarea></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['id7'])){ 
			$var=$_POST['id7']; 
			echo task7($var); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
	</div>

	<p>Задание8: В заданной строке избавьтесь от случайных повторяющихся пробелов</p> 
	<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST"> 
		<p><textarea placeholder="Введите" name="id8"></textarea></p> 
		<p><input type="submit"></p> 
	</form> 
	<div> 
		<?php 
		if(isset($_POST['id8'])){ 
			$var=$_POST['id8']; 
			echo task8($var); 
		} 
		else{ 
			echo "Введите данные"; 
		} 
		?> 
	</div>
</body>
</html>
