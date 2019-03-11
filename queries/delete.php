<?php
session_start();
include 'connection.php';
$id_num = $_GET['dr'];
$query = "DELETE FROM messages WHERE id ='$id_num'";
if (isset($_GET['dr'])) {
    $data = mysqli_query($con, $query);
    if ($data) {
        header("location:../messageform/welcome.php?deleted= Message was deleted");
    } else {
        header("location:../messageform/welcome.php?nope= not deleted");;
    }
}
?>