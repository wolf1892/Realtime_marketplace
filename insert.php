<?php 
session_start(); 
$connect = mysqli_connect("localhost", "root", "", "testing");
$username=$_SESSION['username'];
$sql = "INSERT INTO test(product_name, price, per, person_name, phone, size, brand, special, life, moq, price_change, username) VALUES('".$_POST["product_name"]."', '".$_POST["price"]."', '".$_POST["per"]."', '".$_POST["person_name"]."', '".$_POST["phone"]."', '".$_POST["size"]."', '".$_POST["brand"]."', '".$_POST["special"]."', '".$_POST["life"]."', '".$_POST["moq"]."', '".$_POST["price_change"]."', '$username')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>