<?php

	if(isset($_POST['submit'])){

		$productname = $_POST['productname'];
		$ditails = $_POST['ditails'];
		$quentity   = $_POST['quentity'];
		$price   = $_POST['price'];


		if($productname == "" || $ditails == "" || $quentity == "" || $price == ""){

			//echo "invalid submission";
			header("location: Own_product_delete.php");

		}else{

			$myfile = fopen("addproduct.txt", 'a');
			$data = $productname."|".$ditails."|".$quentity."|".$price."|"."\r\n";
			fwrite($myfile, $data);
			fclose($myfile);
			
			header("location: After_adding_products.php");

		}
	}

?>