<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload Page</title>
    <link rel="stylesheet" href="UPLOAD_PAGE_STYLES.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="UPLOAD_APP.js"></script>
</head>

<body>
    <div class="First-Page">
        <div class="navigation">
            <div class="icon">
                <a href="HOME.html">
                    <img src="Images/ONGC_Logo.png" alt="Oil and Natural Gas Corpuration" width="50px" height="50px">
                </a>
            </div>
            <div class="right_side">
                <div class="nav_right_link">
                    <a href="#">HOME</a>
                </div>
                <div class="nav_right_link">
                    <a href="https://www.ongcindia.com/">ONGC</a>
                </div>
            </div>
        </div>
        <div class="center">
            <div class="centre_text">
                <h1>OIL AND NATURAL GAS CORPURATION</h1>
                <h3>
                    <br>
                    <br> WELCOME -USER-
                    <br>
                    <br>
                </h3>
            </div>
            <!--            <div class="center_button">
                <button class="upload_button">UPLOAD EXCEL FILE</button>
                <input type="file" name="XML_FILE" />

            </div>
            -->
            <div class="drop_down_menu">
                <button onclick="myFunction()" class="dropbtn">---| FILE UPLOAD FORM |---</button>
                <div id="mydrop_down_menu" class="drop_down_menu-content">
                    <main>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h3> FILE UPLOAD </h3>
                                    <br>
                                    <hr>
                                    <br>
                                    <form action="UPLOAD_DBCONNECT.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">

                                            <div class="custom-file">
                                                <label for="Excel" class="BROWSE">---| BROWSE |---</label>
                                                <input type="file" name="file" id="Excel"/>
                                                <br>
                                                <br>
                                                <label class="custom-file-label" for="Excel">
                                                        ....Select File....
                                                        <br>
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                        <button type="submit" name="submit" class="btn btn-primary">UPLOAD</button>
                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
