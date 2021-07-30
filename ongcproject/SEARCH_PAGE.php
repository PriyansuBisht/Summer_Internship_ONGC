<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="SEARCH_PAGE_STYLES.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>
    <div class="First-Page">
        <div class="navigation">
            <div class="nav_left_side">
                <div class="icon">
                    <a href="HOME.html">
                        <img src="Images/ONGC_Logo.png" alt="Oil and Natural
                                Gas Corpuration" width="50px" height="50px">
                    </a>
                </div>
                <div class="nav_left_link">
                    <a href="HOME.html">HOME</a>
                </div>
                <div class="nav_left_link">
                    <a href="https://www.ongcindia.com/">ONGC</a>
                </div>
            </div>

            <div class="nav_right_side">

                <div class="profile_button_MENU">
                    <form action="PROFILE_PAGE.html">
                        <button class="Profile_dropbtn" type="submit">--| ADMIN |--</button>
                    </form>

                    <div class="Profile_content">
                        <a href="">PROFILE</a>
                        <a href="">DIRECTORY</a>
                        <a href="">SIGN OUT</a>
                    </div>
                </div>
            </div>

            <div class="center">
                <div class="centre_text">
                    <h1>OIL AND NATURAL GAS CORPURATION</h1>
                    <h3>
                        <br>
                        <br> WELCOME --| ADMIN |--
                        <br>
                        <br>
                    </h3>
                </div>

                <div class="SEARCH_FILE_OPTION">
                    <form action="SEARCH_N_UPLOAD.php" method="POST">
                        <input type="search" id="open" name="filename" >
                        <i class="fa fa-search"></i>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <div class="Second_Page"></div>
</body>

</html>