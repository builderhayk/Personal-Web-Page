<?php
if (isset($_SESSION['User'])) {
} else {
    header("location:login.php");
}
$sql = "SELECT * FROM messages ";
$result = mysqli_query($con, $sql);
$resultcheck = mysqli_num_rows($result);
?>