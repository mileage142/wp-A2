<?php
	include_once("topPart.php");

	
	//read cookie
	?>
	<table>
        <form action="cart.php" method="post" onsubmit='formVal();'>
          <input type='hidden' id='price' value=40.00 name="price"> 
          <input type='hidden' id='productId' value=B1 name="productId"> 
          <!--<input type='number' id='qty' name='qty' value=null min=1 max=10 step=1 title='pop-up error message' /> <br>-->
        <tr><td>First name: </td><td></td><td> <input type='text' id='fname'  name='fname' required='required'></td></tr>

        <tr><td>Last name: </td><td></td><td> <input type='text' id='lname'  name='lname' required='required'></td></tr>

		<tr><td>Address: </td><td></td><td>  <textarea type='textarea' id='address' name='address' required='required' rows='3' col='10	'> </textarea></td></tr>

		<tr><td>Email: </td><td></td><td> <input type='email' id='email'  name='email' required='required'></td></tr>
		//needs regex
		<tr><td>Mobile Phone: </td><td></td><td> <input type='number' id='phone'  name='phone' pattern='\(?\+?[0-9]{0,3}\)?([0-9 ]{9,12})' 
			title='explanation'></td></tr>
		
		<tr><td>Delivery Method: </td><td></td><td> 
			<input type='radio' id='delivery' name='delivery' value='regular'>Regular post<br>						
			<input type='radio' id='delivery' name='delivery' value='Courier'>Courier<br>
			<input type='radio' id='delivery' name='delivery' value='express'>Express post<br>
		</td></tr>

		<tr><td>Credit Card: </td><td></td><td> <input type='number' id='credit'  name='credit' required='required' pattern='[0-9 ]{15,21}'></td></tr>
		
		<tr><td>Expiry: </td><td></td><td> 
			<select name='ccdate' id='ccdate'>
				<option value=1>1</option>
				<option value=2>2</option>
				<option value=3>3</option>
				<option value=4>4</option>
				<option value=5>5</option>
				<option value=6>6</option>
				<option value=7>7</option>
				<option value=8>8</option>
				<option value=9>9</option>
				<option value=10>10</option>
				<option value=11>11</option>
				<option value=12>12</option>
			<select>
		
			<select name='ccyear' id='ccyear'>
				<option value=2015>2015</option>
				<option value=2016>2016</option>
				<option value=2017>2017</option>
				<option value=2018>2018</option>
				<option value=2019>2019</option>
				<option value=2020>2020</option>
				<option value=2021>2021</option>
				<option value=2022>2022</option>
			</select>

		</td></tr>
		
	</table>

		Please Sign me up for our newsletter: <input type='checkbox' id='nletter' name='nletter'><br><br>

         <input  type="submit" value="Submit">
        </form>
          

<?php
	include_once("bottomPart.php");
	
?>