<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "import_excel_php";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
