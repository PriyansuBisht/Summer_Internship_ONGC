<?php
use SimpleExcel\SimpleExcel;
if (isset($_POST['submit'])) 
{
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmp = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('csv');

	if (in_array($fileActualExt, $allowed)) 
	{
		
		if ($fileError === 0) 
		{
			if($fileSize < 1000000) 
			{
				$fileDestination = 'uploads/'.$fileName;

				move_uploaded_file($fileTmp,$fileDestination);

    			require_once('SimpleExcel/SimpleExcel.php');
    		
    			$excel = new SimpleExcel('csv');                  
    
    			$excel->parser->loadFile($fileDestination);           
    
    			$foo = $excel->parser->getField(); 

    			$count = 1;


    			$db = mysqli_connect('localhost','root','','import_excel_php');

				while(count($foo)>$count)
    			{
      				$id = $foo[$count][0];
      				$item_name = $foo[$count][1];        
      				$item_type = $foo[$count][2];
      				$state = $foo[$count][3];
      				$budget = $foo[$count][4];
      				$department=$foo[$count][5];
      				$user_remark=$foo[$count][6];
      				$admin_remark=$foo[$count][7];
      				$query = "INSERT INTO budget(id,item_name,item_type,state,budget,department,user_remark,admin_remark)";
      				$query.="VALUES ('$id','$item_name','$item_type','$state','$budget','$department','$user_remark','$admin_remark')";
      				mysqli_query($db,$query);
      				$count++;
    			}
				header("Location: USER_DISPLAY.php?uploadsuccess");
			}
			else
			{
				echo "The file is too big";
			}
		}
		else
		{
			echo "ERROR";
		}
	}
	else
	{
		echo "You cannot upload this type of file";
	}
}
?>