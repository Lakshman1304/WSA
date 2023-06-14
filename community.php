<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['Address'];
$about = $_POST['message'];
$skills = $_POST['message'];
$do_for_us = $_POST['message'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wsa";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO community_data(name, email, phone, address, about, skills, do_for_us)
        VALUES ('$name', '$email', '$phone', '$address', '$about', '$skills', '$do_for_us')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//showing alert and redirected to contact page
echo "<script>
setTimeout(SWAL, 1000);
function SWAL(){
    swal('Thanks!', 'Your Message Sent Successfully!', 'success');
}
setTimeout(OUT, 2000);
function OUT(){
    window.location.href = './community.html';
}
</script>";
?>
<!--sweet alert cdn-->
<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>