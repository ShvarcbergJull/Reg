<?php
function task1($var)
{
	if (preg_match("/\.([a-z0-9]+)$/", trim($var), $mas))
	{
		$result = $mas[1];
		return $result;
	}
	else
	{
		return "Error format";
	}
}

function task2($str){ 
	if(preg_match("/^[a-z0-9а-я_]+\.([a-z]+)$/", $str, $mas)) 
	{ 
		if(preg_match("/(zip|rar|tz|gzip|7z)/", $mas[1])) 
		{ 
			return "Это архив"; 
		} 

		if(preg_match("/(mp3|midi|m4p|temp)/", $mas[1])) 
		{ 
			return "Это музыка"; 
		} 

		if(preg_match("/(mp4|mov|avi|flv|vob)/", $mas[1])) 
		{ 
			return "Это видео"; 
		} 

		if(preg_match("/(jpg|png|bmp|pict|cur)/", $mas[1])) 
		{ 
			return "Это картинка"; 
		} 

		return "Не знаю такого формаа файла"; 
	} 
	return "Вы ввели файл без расширения или ошиблись в его написании"; 
} 


function task3($str) 
{ 
	if(preg_match("%<title>(.+)</title>%", $str, $mas)) 
	{ 
		return $mas[1]; 
	} 
	return "В данном html-коде нет заголовков";
} 


function task4($str){ 
	if(preg_match_all("#<a(.+)>(.+)</a>#", $str, $mas1)){
		$str1 = '';
		for ($i=0; $i < count($mas1[1]); $i++)
		{ 
			$str1 .= $mas1[1][$i];
			$str1 .= "<br>";
		}
		if (preg_match_all("#href=(?:\"|')+(.+?)(?:\"|')+#", $str1, $mas))
		{ 
			for($i=0;$i<count($mas[1]);$i++){ 
				echo $mas[1][$i]."<br>"; 
			}
			return;
		} 
	} 
	return "В данном html-коде нет ссылок"; 
} 

function task5($str){ 
	if(preg_match_all("#<img(.+)>#", $str, $mas1)){
		$str1 = '';
		for ($i=0; $i < count($mas1[1]); $i++)
		{ 
			$str1 .= $mas1[1][$i];
			$str1 .= "<br>";
		}
		if (preg_match_all("#src=(?:\"|')+(.+?)(?:\"|')+#", $str1, $mas))
		{ 
			for($i=0;$i<count($mas[1]);$i++){ 
				echo $mas[1][$i]."<br>"; 
			}
			return;
		} 
	}  
	return "В данном html-коде нет ссылок"; 
}

function task6($var, $text)
{
	$temp = "<strong>$text</strong>";
	if (preg_match("/$text/", $var))
	{
		$result = preg_replace("/$text/", $temp, $var);
		return $result;
	}
	return "Нет сходства";
}

function task7($var)
{
	$res = $var;
	$smile = "/\:\)/";
	$wink = "/\;\)/";
	$sad = "/\:\(/";

	$res = preg_replace($smile, "<img src='smile.png' alt=':)' height='20 px'>", $res);
	$res = preg_replace($wink, "<img src='wink.png' alt=';)' height='20 px'>", $res);
	$res = preg_replace($sad, "<img src='sad.png' alt=':(' height='20 px'>", $res);
	if ($res === $var)
	{
		return "Emodgy not";
	}
	return $res;
}

function task8($var)
{
	$var = preg_replace("/(\ ){2,}/", " ", $var);
	return $var;
}
