<?PHP

// GET VALUES SENT THROUGH FORM

$id = $_POST["id"];
$user_remark = $_POST["remark"];

// CONNECT TO SERVER

$conn = mysqli_connect('127.0.0.1', 'root', '', 'import_excel_php');
if($conn -> connect_error){
    die("Connection Failed: " . $conn -> connect_error);
}
else{
    
    // CONNECTED TO SERVER
    // RUN QUERY

    $sql = "UPDATE budget SET user_remark='$user_remark' WHERE id = '$id'";

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

header("refresh:0;url=USER_DISPLAY.php");

?>