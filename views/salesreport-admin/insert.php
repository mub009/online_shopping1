<?php
/**
* @author athirakrishnanp
* @version 1.0
* @created date : 13/03/2017
* @modified date : 14/03/2017
*/

//print_r($data);

$count=count($data);
for ($i=0; $i <$count ; $i++) 
{ 
	echo $data[$i]['dat_order_date']."<br>";

}
?>
