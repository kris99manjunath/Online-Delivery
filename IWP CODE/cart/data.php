<?php

$conn = new mysqli("localhost", "root","");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "USE rob";
if($conn->query($sql)===TRUE)
    echo "Using mydb"."<br>";
else
    echo "Error using database: " . $conn->error;
$sql ="CREATE `products` (
  id int(11) NOT NULL AUTO_INCREMENT,
  product_code varchar(60) NOT NULL,
  product_name varchar(60) NOT NULL,
  product_desc tinytext NOT NULL,
  product_img_name varchar(60) NOT NULL,
  price decimal(10,2) NOT NULL
) " ;
if($conn->query($sql) === TRUE)
    echo "Table created successfully"."<br>";
else   
    echo "Error while creating table : ". $conn->error;

?>
