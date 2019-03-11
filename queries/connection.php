<?php
$con = mysqli_connect('localhost', 'root', '', 'task');
if (!$con) {
    die('please check you con' . mysqli_error());
}
define('BASEURL', '/task/');
?>