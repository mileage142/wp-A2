<?php
session_start();
//var_dump($_POST);
//echo $_SESSION['user'];
$matchFound=false;
$firstLine=true;
$row = 1;
//echo isset($_POST['username']);
echo $_POST['username'];
//echo $_POST['password'];
$fp=fopen("files/customers.txt", "r");
//echo $session;

//echo($fp);
flock($fp, LOCK_EX);
while(($data = fgetcsv($fp, "\t", '"')) !== FALSE)

//while($data=fgetcsv($fp, "\t", '"'))
{
	//print_r($data);
	//echo $data[0];
	//foreach($data = &$data)
		//$data=trim($data);
	
	$num  = count($data);
	//echo "<p> $num fields in line $row: <br /></p>\n";
	//echo $num;
	$row++;

	//look through array	
	for ($c=0; $c < $num; $c++)
	{
		//match username input to array
		if ($data[2] = $_POST['username']) 
		{
			
			//check password hash by hashing inputed password
			//didn't have salt so used raw password
			if($_POST['password'] == $data[3])
			{
				echo "logged in!";
				$_SESSION["user"] = 'valued';
				$_SESSION['fname'] = $data[0];
				$_SESSION['lname'] = $data[1];
				$_SESSION['email'] = $data[2];
				$_SESSION['phone'] = $data[5];
				$_SESSION['disc1'] = $data[6];
				$_SESSION['disc2'] = $data[7];
				$_SESSION['disc3'] = $data[8];
				
				flock($fp, LOCK_UN); 
				fclose($fp);
				header('location: home.php');
				//set$session or cookie = 
			}
		}
		
		//echo "<p> soemthing <p>";
		//echo "<p> $data[2] <p>";
		//	echo $data[3];
		//echo "<p><br><p>";
		//echo "$data[4]";
	}
}
			$_SESSION["user"] = 'guest';
			echo "logged out";
			header('location: home.php');
			flock($fp, LOCK_UN); 
			fclose($fp);

?>