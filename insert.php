<?php
include 'connection.php';

if(isset ($_POST['submit'])){

    $type = $_POST['type'];
    $production_name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $addressline1 = $_POST['addressline1'];
    $addressline2 = $_POST['addressline2'];
    $pincode = $_POST['pin'];

    $insertquery = "insert into `data`( `type`, `production_name`, `quantity`, `image`, `date`, `time`, `place`, `city`, `pincode`) VALUES ('$type', '$production_name', '$quantity', '$image', '$date', '$time', '$addressline1', '$addressline2', '$pincode')";
  $res = mysqli_query($con,$insertquery);

  if  ($res){
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('sent to green trash ✔!');
            window.location.href='sell.php';
            </script>");
}else{
    echo "<script>alert('request not sent try again!');</script>";
}
}
?>