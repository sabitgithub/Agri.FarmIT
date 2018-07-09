<?php
	


?>

<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

<fieldset>
	<legend>Product List</legend>
	
	<form>
	<br/>
		<table style="width:100%">
		  <tr>
			<th>Product Name</th>
			<th>Ditails</th>
			<th>Quentity</th>
			<th>Price</th>
		  </tr>
		  <tr>
			<?php
				$myfile = fopen("product_info.txt", "r");
				$data   = fread($myfile, filesize("product_info.txt"));
				fclose($myfile);
				$arr1 = explode("|", $data);
				$arr2 = explode("/", $data);
				$arr3 = explode("@", $data);
				$arr4 = explode("#", $data);
			?>
			<td><?php echo $arr1[0];?></td>
			<td><?php echo $arr2[1];?></td>
			<td><?php echo $arr3[1];?></td>
			<td><?php echo $arr4[1];?></td>
		  </tr>
		  <tr>
			<td><?php echo $arr1[1];?></td>
			<td><?php echo $arr2[2];?></td>
			<td><?php echo $arr3[2];?></td>
			<td><?php echo $arr4[2];?></td>
		  </tr>
		  <tr>
			<td><?php echo $arr1[2];?></td>
			<td><?php echo $arr2[3];?></td>
			<td><?php echo $arr3[3];?></td>
			<td><?php echo $arr4[3];?></td>
		  </tr>
		  
		  
		</table>
		<br/>
		<center>
		<input type="button" onclick="location.href='Own_product_add.php';" value="Add Products" />
		<input type="button" onclick="location.href='Own_product_update.php';" value="Update Products" />
		<input type="button" onclick="location.href='Own_product_delete.php';" value="Delete Products" /><br/>
		</center>
		
	</form>

</fieldset>