
<?php


        $mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM hospital") or die($mysqli->error);



if(isset($_POST['save'])){

    $date = $_POST['date'];
    $district = $_POST['district'];
    $new_case = $_POST['newcase'];
    $death	= $_POST['death'];
    $recover = $_POST['recover'];


    $mysqli->query("INSERT INTO hospital (date,district,new_case,death,recover) VALUES('$date','$district','$new_case','$death','$recover')") or die($mysqli->error);
    $_SESSION['message']="Record has been created!";
    $_SESSION['msg_type']="success";
    
    header("location: hos_controller.php");

}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM hospital WHERE hos_update_id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been Deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: hos_controller.php");
}


?>
