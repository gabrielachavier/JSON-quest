<?php 
	$json = file_get_contents('questoes.json');
	$quest = json_decode($json);
	$i=1;
	//var_dump($quest);
	foreach ($quest as $q)
	{
		echo"<br>";
		echo $i++." $q->enunciado ";
		echo" (Correta:$q->correct )";
		echo"<br>";
		foreach($q->alternativas as $alt){
			echo "<input type='radio' name='alt".$i."'>$alt";
			echo "<br>";
		}
		echo "<p></p>";
		echo "<br>";
		//echo "key($quest)";
	}
?>