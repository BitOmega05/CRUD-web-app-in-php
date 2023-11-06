<?php
include 'dbcon.php';
if (isset($_POST['add_students'])) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $age = $_POST['age'];

    if ($f_name == "" || empty($f_name)) {
        header('location:index.php?message="You forgot to enter first name!"');
    }
    if ($l_name == "" || empty($l_name)) {
        header('location:index.php?message="You forgot to enter last name!"');
    }
    if ($age == "" || empty($age)) {
        header('location:index.php?message="You forgot to enter age!"');
    }
    if(empty($f_name) && empty($l_name) && empty($age)){
        header('location:index.php?tecks="You entered Nothing."');
    }

    else{

        $query="insert into `students` ( `first_name` , `last_name` , `age` ) values ('$f_name','$l_name','$age')";
        $result=mysqli_query($conn,$query);

        if(!$result){
            die('Query failes'.mysqli_error($mysqli));
        }
        else{
            header('location:index.php?insert_msg="Your record has been added Successfully!"');
        }
    }
}
