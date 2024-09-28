<?php
include 'connect.php';
$id = $_GET['id'];

$sql = "DELETE FROM one WHERE id = '$id'";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Record deleted successfully.')</script>";
    header("Location: view.php");
}else{
    echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
}
