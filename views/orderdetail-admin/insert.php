<?php

//echo "inserted";
//print_r($data);
$count=count($data);
for($i=0;$i<$count;$i++)
{
	echo "<table>";
	echo $data[$i]['vchr_first_name'];
	echo $data[$i]['vchr_last_name'];
	echo "<br>";
	echo "</table>";
}

?>