<?php

    $filename= $_POST['file_name'];
    $x = 'uploads\\';
    $file_name=$x.$filename;

    $conn = mysqli_connect('localhost' , 'root' , '' , 'import_excel_php');

    if (!$conn) {
        die("connection failed:");
    } else {
  
        
        $output = fopen($file_name, "w");  
        if($output) {
            fputcsv($output, array('id','item_name','item_type','state','budget','department','user_remark','admin_remark'));  
            $query = "SELECT * from budget ORDER BY id";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_assoc($result))  
            {  
                 fputcsv($output, $row);  
            }  
            $tableclose = "TRUNCATE TABLE budget";
            mysqli_query($conn,$tableclose);
            header("refresh:0;url=SEARCH_PAGE.php");
            echo "
                <script>
                    alert('FILE SAVED SUCESSFULLY');
                </script>
            ";
        }
       
        fclose($output); 
    }
    $conn->close();

?>
