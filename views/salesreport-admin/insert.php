<?php
/**
* @author athirakrishnanp
* @version 1.0
* @created date : 13/03/2017
* @modified date : 14/03/2017
*/
?>
<table>
<th>Purchase Date</th>
<th>Product</th>
<?php
$count=count($data);
for ($i=0; $i <$count ; $i++) 
{ 
	?>

	<tr><td><?=$data[$i]['dat_order_date']."<br>";?></td>
	<td><?=$data[$i]['Vchr_product_name']."<br>";?></td></tr>
<?php
}

?>
</table>