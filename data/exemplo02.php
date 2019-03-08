<?php

$ts = strtotime("+1 week");
$a = 1;

	while($ts < 1562105982){
		$ts = strtotime($a." day");
		echo date("l, d/m/y",$ts);
		echo "<br>";
		$a++;
	};





?>