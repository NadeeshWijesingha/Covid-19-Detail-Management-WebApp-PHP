<?php
$con=mysqli_connect('localhost','root','mysql','php_covid_project');

if(!$con)
{
    die('Connection Failed'. mysqli_error(!$con));
}
?>