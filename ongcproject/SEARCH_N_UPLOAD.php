<?php

$path = "uploads\\";
$name = $_POST["filename"];
$file_name = $path.$name;


// ADD THIS IF
//-----------------------------------------------------------------------------------------------//

if ((file_exists($file_name))==false) {
    echo "
        <script>
            alert('!!! FILE NOT FOUND !!!');
        </script>
    ";    
    header("refresh:0;url=ADMIN_SIDE.php");
    exit();
}

//-----------------------------------------------------------------------------------------------//


$conn = mysqli_connect('localhost', 'root', '', 'import_excel_php');

if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
 
if(($handle     =   fopen($file_name, "r")) !== FALSE){
    while(($row =   fgetcsv($handle)) !== FALSE){
        $conn->query('INSERT INTO `budget`(`id`,`item_name`,`item_type`,`state`,`budget`,`department`,`user_remark`,`admin_remark`) VALUES ("'.$row[0].'","'.$row[1].'","'.$row[2].'","'.$row[3].'","'.$row[4].'","'.$row[5].'","'.$row[6].'","'.$row[7].'")');
    }
    fclose($handle);
    header("refresh:0;url=ADMIN_DISPLAY.php");
}


// REMOVE ELSE FROM HERE


?>