<?php
session_start();
require_once('connection.php');
if (isset($_POST['login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header("location:../login_form/login.php?Empty= please fill empty blanks");
    } else {
        $query = "SELECT * FROM login WHERE login='" . $_POST['username'] . "'and password='" . $_POST['password'] . "'";
        $result = mysqli_query($con, $query);

        if (mysqli_fetch_assoc($result)) {
            $_SESSION['User'] = $_POST['username'];
            header("location:../messageform/welcome.php");
        } else {
            header("location:../login_form/login.php?Invalid= Please Enter Correct Password or Username");
        }
    }
} else {
    echo "Not Working Now";
}


?>