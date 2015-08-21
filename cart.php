<?php
	session_start();
	include_once("topPart.php");
	
	//var_dump($_POST);
?>
	
	

		<main>
<script>
 	var increaseAmount = function()
    {   
    	document.getElementById('<%= Session['prod1qty'] %>').value = +document.getElementById('<%= Session['prod1qty'] %>').value + +1;
    }
    var decreaseAmount = function()
    {
        document.getElementById('<%= Session['prod1qty'] %>').value = document.getElementById('<%= Session['prod1qty'] %>').value-1;
    }
    </script>

<?php
	
	
	if($_POST['productId'] == 'prod1')
	{ 
		if(!isset($_SESSION['prod1qty']))
		{
			$_SESSION['prod1qty'] = $_POST['qty'];
		}
		else
		{	
			$_SESSION['prod1qty'] = $_SESSION['prod1qty'] + $_POST['qty'];
		}
		$_SESSION['prod1price'] = $_POST['price'];
	 }
	if($_POST['productId'] == 'prod2')
	{ 
		if(!isset($_SESSION['prod2qty']))
		{
			$_SESSION['prod2qty'] = $_POST['qty'];
		}
		else
		{	
			$_SESSION['prod2qty'] = $_SESSION['prod2qty'] + $_POST['qty'];
		}
		$_SESSION['prod2price'] = $_POST['price'];
	}
	if($_POST['productId'] == 'prod3')
	{ 
		if(!isset($_SESSION['prod3qty']))
		{
			$_SESSION['prod3qty'] = $_POST['qty'];
		}
		else
		{	
			$_SESSION['prod3qty'] = $_SESSION['prod3qty'] + $_POST['qty'];
		}
		$_SESSION['prod3price'] = $_POST['price'];
	}
	?>
	<form method='POST'>
		<input type='button' value='+' onclick='increaseAmount();'>
		<input type='button' value='-' onclick='decreaseAmount();'>
	<?php
	if(isset($_SESSION['prod1qty']))
	{ ?>
	<table>
		<tr><td><?php
		echo $_SESSION['prod1qty']; 
		?></td><td>x<?php
		echo ' blue leaf pattern bowl';
		?></td><td><?php
		$_SESSION['prod1total'] = $_SESSION['prod1qty'] * $_SESSION['prod1price'];
		?></td><td>$<?php
		echo $_SESSION['prod1total'];
		?></td></tr><br><?php 
	} 

	if(isset($_SESSION['prod2qty']))
	{ ?>
		<tr><td><?php
		echo $_SESSION['prod2qty'];
		?></td><td>x<?php
		echo ' blue speckle temuku bowl';
		?></td><td><?php
		$_SESSION['prod2total'] = $_SESSION['prod2qty'] * $_SESSION['prod2price'];
		?></td><td>$<?php
		echo $_SESSION['prod2total'];
		?></td><td><br><?php
	} 
	if(isset($_SESSION['prod3qty']))
	{  ?>
		<tr><td><?php
		echo $_SESSION['prod3qty'];
		?></td><td>x<?php
		echo ' large anagama jar';
		?></td><td><?php
		$_SESSION['prod3total'] = $_SESSION['prod3qty'] * $_SESSION['prod3price'];
		?></td><td>$<?php
		echo $_SESSION['prod3total'];
		?></td><td><br><?php
	} 
	echo "<br><br>";
	?><tr><td></td><td><?php
	echo 'Total: ';
	?></td><td></td><td>$<?php
	echo $_SESSION['prod1total'] + $_SESSION['prod2total'] + $_SESSION['prod3total'];
	?></td><td>
	</table><?php

?>


		<h2>
			<a href="checkout.php">Checkout</a>
		<h2>
		
		<p>
			Or add to your order <br>
			<a href="products.php">Back to product page</a> 
		</p>

	
    </main>

<?php
	include_once("bottomPart.php");
	
?>