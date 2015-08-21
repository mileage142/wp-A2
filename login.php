<?php
var_dump($_POST);
$matchFound=false;
$firstLine=true;
$row = 1;
echo isset($_POST['username']);
echo $_POST['username'];
echo $_POST['password'];
$fp=fopen("files/customers.txt", "r");
//echo $session;
var_dump($_SESSION);
echo($fp);
flock($fp, LOCK_EX);
while(($data = fgetcsv($fp, "\t", '"')) !== FALSE)

//while($data=fgetcsv($fp, "\t", '"'))
{
	//print_r($data);
	//echo $data[0];
	//foreach($data = &$data)
		//$data=trim($data);
	
	$num  = count($data);
	echo "<p> $num fields in line $row: <br /></p>\n";
	echo $num;
	$row++;

	//look through array	
	for ($c=0; $c < $num; $c++)
	{
		//match username input to array
		if ($data[0] == $_POST['username']) 
		{
			//check password hash by hashing inputed password
			if(md5($_POST['password']) == $data[4])
			{
				//set cookie
				//set$session or cookie = 
			}
		}

		//echo "<p> soemthing <p>";
		echo "<p> $data[0] <p>";
	}
}
?>