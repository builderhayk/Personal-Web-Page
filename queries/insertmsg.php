<?php
//connection to db
$con = mysqli_connect('localhost', 'root', '', 'task');
if (!$con) {
    die('please check you con' . mysqli_error());
}
//db insert queries
if (isset($_POST['send'])) {
    $date = $_POST['date'];
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (empty($_POST['date']) || empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['message'])) {
        header("location:../index.php?Empty= please fill empty blanks");
    } else if (!preg_match("/[a-zA-Z]{7,25}$/", $first) || !preg_match("/[a-zA-Z]{4,25}$/", $last)) {
        header("location:../index.php?NamenotValid= First name and Last name should contain more then 4 and less then 10 letters");
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        header("location:../index.php?Email= Your Email is not valid");
    } else {
        $query = "INSERT INTO messages (date,full_name,subject,email,message) VALUES ('" . $_POST['date'] . "','" . $_POST['first_name'] . "','" . $_POST['last_name'] . "','" . $_POST['email'] . "','" . $_POST['message'] . "')";
        $result = mysqli_query($con, $query);
        header("location:../index.php?Success= Message send");
    }
} else {
    echo "Not Working Now";
}
?>