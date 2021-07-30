<?PHP

// GET VALUES SENT THROUGH FORM

$id = $_POST["id"];
$state = $_POST["status"];
$admin_remark = $_POST["remark"];

// CONNECT TO SERVER

$conn = mysqli_connect('localhost', 'root', '', 'import_excel_php');

if($conn -> connect_error) {
    die("Connection Failed: " . $conn -> connect_error);
}
else{
    
    // CONNECTED TO SERVER
    // RUN QUERY

    $sql = "UPDATE budget SET state='$state' , admin_remark='$admin_remark' WHERE id = '$id' ";

    if($conn -> query($sql) === TRUE){
        echo " <script>
        alert('--| RECORD UPDATED |--');
        </script> ";
    }
    else{
        echo "<script>
        alert('--| error |--');
         " . $sql . "<br>" . $conn -> error . "</script>";
    }
}
$conn -> close();

header("refresh:0;url=ADMIN_DISPLAY.php");

?>