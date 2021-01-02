
<?php


$mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM q_center") or die($mysqli->error);

$id=0;
$update= false;
$name='';

if(isset($_POST['save'])){

$date = $_POST['date'];
$district = $_POST['district'];
$new_suspect = $_POST['newsuspect'];
$release	= $_POST['release'];


$mysqli->query("INSERT INTO q_center (date,district,new_suspect,releases) VALUES('$date','$district','$new_suspect','$release')") or die($mysqli->error);
$_SESSION['message']="Record has been created!";
$_SESSION['msg_type']="success";

header("location: q_controller.php");

}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM q_center WHERE q_update_id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been Deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: q_controller.php");
}


?>
