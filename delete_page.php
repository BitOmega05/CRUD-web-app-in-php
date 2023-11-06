<?php include 'dbcon.php';?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$query="delete from `students` where `id`='$id'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Query fails'.mysqli_error($mysqli));
} else {

    header('location:index.php?delete_msg="Your record has been Deleted !"');
}
?>