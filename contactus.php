<!--php script to send email-->
<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wsa";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO contact_messages (name, email, phone, message)
        VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();



//variable declaration
$name = $_POST['name'];  //name of sender 
$email = $_POST['email']; // email of sender
$phone = $_POST['phone'];  //phone no. of sender
$message = $_POST['message'];  //message by sender

//form content
$formcontent="From: $name \n Phone no.: $phone \n Message: $message";

$recipient = "wsatrustindia@gmail.com"; // recipient email
$subject = "WSA - Contact Form ";     //Email Subject
$mailheader = "From: $email \r\n";    //mail header   



//showing alert and redirected to contact page
echo "<script>
setTimeout(SWAL, 1000);
function SWAL(){
    swal('Thanks!', 'Your Message Sent Successfully!', 'success');
}
setTimeout(OUT, 2000);
function OUT(){
    window.location.href = './contactus.html';
}
</script>";
?>
<!--sweet alert cdn-->
<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
