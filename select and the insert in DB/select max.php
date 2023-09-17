<?php
$conn=new mysqli('localhost','root','','ticket_booking');
if(!$conn){
    die("error not connected".mysqli_connect_error());
}else{
    echo "connected to Databaase";
}
$sql="SELECT passenger_destination FROM passenger"; 
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "maximum destination"." ".$row["passenger_destination"]."<br>";
    }
}
    else{
        echo "o result";
    }
$conn->close();
?>