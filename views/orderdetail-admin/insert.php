<?php
/**
* @author fayiza 
* @version 1.0
* @created date 14/03/17
* @modified date 15/03/17
*/
//echo "inserted";
//print_r($data);
$count=count($data);
echo "<table>";
for($i=0;$i<$count;$i++)
{
	
	echo "first_name"." - ".$data[$i]['vchr_first_name']."<br>";
	echo "last.name"." - ".$data[$i]['vchr_last_name']."<br>";
	echo "age"." - ".$data[$i]['vchr_age']."<br>";
	echo "mobile_number"." - ".$data[$i]['int_mobile_number']."<br>";
	echo "address"." - ".$data[$i]['text_address']."<br>";
	echo "order_status"." - ".$data[$i]['order_status']."<br>";
	echo "<br>";
	
}
echo "</table>";


?>
