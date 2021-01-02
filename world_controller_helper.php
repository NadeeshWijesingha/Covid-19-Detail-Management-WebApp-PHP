<?php 

$mysqli = new mysqli('localhost','root','mysql','php_covid_project') or die (mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM world") or die($mysqli->error);
        
        if(isset($_POST['save'])){
        
            $date = $_POST['date'];
            $new_case = $_POST['newcase'];
            $death	= $_POST['death'];
            $recover = $_POST['recover'];
        
        
            $mysqli->query("INSERT INTO world (date,new_case,death,recover) VALUES('$date','$new_case','$death','$recover')") or die($mysqli->error);
            $_SESSION['message']="Record has been created!";
            $_SESSION['msg_type']="success";
            
            header("location: world_controller.php");
        
        }

        if (isset($_GET['delete'])){
            $id = $_GET['delete'];
            $mysqli->query("DELETE FROM world WHERE world_update_id=$id") or die($mysqli->error());
        
            $_SESSION['message'] = "Record has been Deleted";
            $_SESSION['msg_type'] = "danger";
        
            header("location: world_controller.php");
        }


?>