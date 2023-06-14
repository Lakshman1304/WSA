<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$transcation_id = $_POST['transcation_id'];
$amount = $_POST['amount'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wsa";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO donation_data (name, email, phone, transcation_id, amount)
        VALUES ('$name', '$email', '$phone','$transcation_id', '$amount')";

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
    window.location.href = './donateform.html';
}
</script>";
?>
<!--sweet alert cdn-->
<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
