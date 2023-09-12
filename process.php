


<?php
// include('connect.php');
// $firstName = $_POST['firstname'];
// $lastName = $_POST['lastname'];
// $email = $_POST['email'];
// $password =$_POST['password'];
// $gender = $_POST['gender'];
// $query = "INSERT INTO harvin(first_name, last_name, email, password,gender) VALUES('$firstName', '$lastName', '$email', '$password','$gender')";
// if(mysqli_query($conn, $query)){
//     echo '';
// }
// else {
//     echo mysqli_error($conn);
// }

 ?> 


<?php
include('connect.php');
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$password =$_POST['password'];
$gender = $_POST['gender'];
$query = "INSERT INTO harvin(first_name, last_name, email, password,gender) VALUES('$firstName', '$lastName', '$email', '$password','$gender')";
if(mysqli_query($conn, $query)){
    echo '';
}
else {
    echo mysqli_error($conn);
}

 ?> 


 
