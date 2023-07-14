<?php
//Retrive form Data
$name = $_POST['name'];
$email = $_POST['email'];
$reg_no = $_POST['reg_no'];
$mobile_no = $_POST['mobile_no'];
$d_o_b = $_POST['d_o_b'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$department = $_POST['department'];
$city = $_POST['city'];
$state = $_POST['state'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
//Database connection
$host = "localhost";
$username = "root";
$password = "";
$db_name = "student";
$conn = new mysqli($host,$username,$password,$db_name);
//To insert data in the database
$sql = "insert into user(name,email,reg_no,mobile_no,d_o_b,gender,course,department,city,state,password,confirm_password)values('$name','$email','$reg_no','$mobile_no','$d_o_b','$gender','$course','$department','$city','$state','$password','$confirm_password')";
$result = $conn->query($sql);
//To handle success or error
if($result){
echo "Data inserted successfully";
}else{
echo "Error".$conn->error;
}
$conn->close();
?>