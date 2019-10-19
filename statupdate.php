<?php 

$conn1 = new mysqli("localhost","root", "","file-management");

if(isset($_POST['passed'])){

    $allowed = mysqli_query($conn1," UPDATE question SET status = '2' WHERE status = '0' or status ='1' ");
    echo "done";
}

if(isset($_POST['insufficient'])){

    $allowed = mysqli_query($conn1," UPDATE question SET status = '1' WHERE status = '0' or status ='1'");
    echo "not done";
}