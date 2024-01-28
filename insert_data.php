<?php 
include 'db.php';
if(isset($_POST['add_students'])){
    
     $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $a_age = $_POST['a_age'];
    
    if($f_name == "" || empty($f_name)){
        header('location:index.php?message=You need to fill the First Name!');
    }

    else{
        $query = "insert into students (First_Name, Last_Name, age) values('$f_name', '$l_name', $a_age)";

        $result = mysqli_query($connection, $query);
// var_dump ('query', $result);
        if(!$result){
            header('location:index.php');
            die("query failed".mysqli_error());
        }

        else{
            header('location:index.php?insert_msg=Youe data has been inserted');
        }
        

    }
} ?>
