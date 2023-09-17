<?php
$conn=new mysqli('localhost','root','','ticket_booking');
if($conn->connect_error){
die("connection failed".$conn->connect_error);
}else{
    echo"connected";
}
$id = isset($_POST['id']) ? $_POST['passenger_id'] : "";
$name = isset($_POST['name']) ? $_POST['passenger_name'] : "";
$age = isset($_POST['age']) ? $_POST['passenger_age'] : "";
$stating_point = isset($_POST['stating_point']) ? $_POST['passenger_stating_point'] : "";
$passenger_destination = isset($_POST['passenger_destination']) ? $_POST['passenger_destination'] : "";
$District = isset($_POST['District']) ? $_POST['District_of_bus'] : "";
$sql="INSERT INTO passenger (passenger_id,passenger_name,passenger_age,passenger_stating_point,passenger_destination,District_of_bus) VALUES ('$id','$name','$age','$stating_point','$passenger_destination','$District')";
if($conn->query($sql)==TRUE){
    echo"data inserted successfully";
}else{
    echo"    Error data has  not inserted";
}
$conn->close();
?>