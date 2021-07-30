<?php
$name = $_POST['name']
$mobile = $_POST['mobile']
$email = $_POST['email']
$address = $_POST['address']
$city = $_POST['city']
$state = $_POST['state']
$amount = $_POST['amount']

$conn = new mysql('localhost','root','','test');
if($conn->connect_error){
  die('Connection failed:' .conn->connect_error );
}else{
  $stmt = $conn->prepare("insert into registration(name,mobile,email,address,city,state,amount)
  values(?,?,?,?,?,?,?)");
  $stmt-> bind_param("sissssi",$name,$mobile,$email,$address,$city,$state,$amount);
  $stmt->execute();
  echo "registration Succesfully....";
  $stmt->close();
  $conn->close();
}
 ?>
