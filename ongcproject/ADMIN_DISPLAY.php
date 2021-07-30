<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ADMIN DISPLAY Page</title>
    <link rel="stylesheet" href="ADMIN_DISPLAY_STYLES.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>
    <div class="First-Page">

        <div class="navigation">
            <div class="icon">
                <a href="EXCEL_SHEET_VIEW.html"><img src="Images/ONGC_Logo.png" alt="Oil and Natural Gas Corpuration" width="50px" height="50px"></a>
            </div>
            <div class="nav_centre_text">
                <h3> PREVIEW OF UPLOADED FILE</h3>
            </div> 
            <div class="right_side">
                <div class="nav_right_link">
                    <a href="HOME.html">HOME</a>
                </div>
                <div class="nav_right_link">
                    <a href="https://www.ongcindia.com/">ONGC</a>
                </div>
            </div>
        </div>



        <div class="center">

            <div class="center_text">
                <br>
                <br>
                <h4>CSV FILE LOADED IN THE DATABASE SUCESSFULLY!!!!</h4>
                <br>
                <br>
                <h5>OPENING SHEET............</h5>
                <br><br><br>
            </div>

            <div class="center_excel_sheet">

                <table>
                    <thead>
                        <tr>
                            <th>SNO.</th>
                            <th>ITEM NAME</th>
                            <th>ITEM TYPE</th>
                            <th>STATUS</th>
                            <th>BUDGET</th>
                            <th>DEPARTMENT</th>
                            <th>USER REMARK</th>
                            <th>ADMIN REMARK</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'import_excel_php');
                        
                        if (!$conn) {
                            die("connection failed:");
                        
                        } else {
                            $sql = "SELECT * FROM budget
                            ORDER BY id";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                        <td>" . $row["id"] . "</td>
                                        <td>" . $row["item_name"] . "</td>
                                        <td>" . $row["item_type"] . "</td>
                                        <td>" . $row["state"] . "</td>
                                        <td>" . $row["budget"] . "</td>
                                        <td>" . $row["department"] . "</td>
                                        <td>" . $row["user_remark"] . "</td>
                                        <td>" . $row["admin_remark"] . "</td>
                                    </tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "0 result";
                            }
                        }
                        
                        $conn->close();
                        ?>
                        
                    </tbody>

                </table>

            </div>

        </div>


        <div class="footer">

            <div class="POP_UP_EDIT_BUTTON">
                <!-- Trigger/Open The POP_UP -->
                <button id="EDIT_BUTTON"> --| EDIT |--</button>

                <!-- The POP_UP -->
                <div id="POP_UP_MODAL" class="POP_UP">

                    <!-- POP_UP_CONTENT -->
                    <div class="POP_UP_CONTENT">

                        <div class="POP_UP_HEADER">
                            <span class="close">&times;</span>
                            <h2>EDIT STATUS & ADMIN REMARK</h2>
                        </div>

                        <form action='UPDATE_ADMIN_STATUS_REMARK.php' method='post'>

                            <label for='id'>   <b> Serial No. </b>    </label>
                            <input type='number' name='id' required>
                            <br><br><br><br>

                            <label for='status'>   <b>Status </b>    </label>
                            <input type='text' name='status' required>
                            <br><br><br><br>


                            <label for='remark'>    <b> ADMIN REMARK </b>    </label>
                            <input type='text' placeholder='ADD NEW ADMIN REMARK' name='remark'>
                            <br><br><br><br><hr><br><br>

                            <input type='submit'>
                        
                        </form>
                    </div>
                </div>
            </div>

            <div class="SAVE_FILE_OPTION">
                <form action='UPDATE_CSV_FILE_ADMIN.php' method="POST">
                    <input type="search" id="open" name="file_name" placeholder="SAVE AS....." required>
                    <i class="far fa-save"></i>
                </form>
            </div>
        </div>


    </div>

    <?php
    echo "
    <script>
        var POP_UP = document.getElementById('POP_UP_MODAL');
        var btn = document.getElementById('EDIT_BUTTON');

        var span = document.getElementsByClassName('close')[0];
        btn.onclick = function() {
            POP_UP.style.display = 'block';
        }

        span.onclick = function() {
            POP_UP.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == POP_UP) {
                POP_UP.style.display = 'none';
            }
        }
    </script>";
    ?>
</body>

</html>
