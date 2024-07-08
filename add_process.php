<?php
    include "connect.php";
    $Name = $_POST["ProductName"];
    $Picture = $_POST["Picture"];
    $Category = $_POST["Category"];
    $Descript = $_POST["ProductDescription"];
    $Price = $_POST["Price"];
    $Quantity = $_POST["QuantityStock"];

    $sql = "INSERT INTO products(
    ProductName,
    Picture,
    Category,
    ProductDescription,
    Price,
    QuantityStock) VALUES('$Name','$Picture','$Category','$Descript','$Price','$Quantity')";

    if($conn->query($sql) === true){
        echo "เพิ่มข้อมูลได้แล้วค่ะ New record created successfully";
    }else{
        echo "เพิ่มข้อมูลไม่ได้ค่ะ Error: " . $sql . "<br>" .$conn->error;
    }

    $conn->close();
    header("Location: index.php");
?>