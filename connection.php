<?php
//1=step)connecting to the database
    $servername="localhost";
    $username="root";
    $password="";
    $database="crud";
$conn = mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo "";
}
else{
    echo "Data not inserted";
}
?>