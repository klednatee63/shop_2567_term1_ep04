<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Home</title>

<body>
    <?php
    include "connect.php";
    ?>
    <!-- ตารางแรกของผม -->
    <table width='100%' border="1">

        <tr>
            <td colspan="4">
                <center>
                    <h1>ร้าน เกล็ดนที ไชยชนะ Shop</h1>
                </center>
            </td>
        </tr>
        <tr>
            <td><a href="./index.php">Home</a></td>
            <td></td>
            <td><a href="./data_edit.php">Manage Products</a></td>
            <td><a href="./addform.php">Create a New Product</a></td>
        </tr>
        <tr height="300px">
            <td colspan="4">
                <?php
                $search = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $search = $_POST['search'];
                }

                $sql = "select * from products where ProductName like '%$search%'";
                
                $result = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]" . mysqli_error($conn));
                ?>
                <form method="post" action="">
                    <input type="text" name="search" value="" size="100">
                    <input type="submit" name="submit" value="ค้นหา">
                </form>
                <table width='100%' border='1'>

                    <tr>
                        <th>ลำดับ</th>
                        <th>รูปภาพสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>ประเภทสินค้า</th>
                        <th>รายละเอียดสินค้า</th>
                        <th>ราคาสินค้า</th>
                        <th>จำนวนสินค้า</th>
                    </tr>
                    <?php


                    if ($result->num_rows > 0) {
                        $count = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><center>" . $count . "</center></td>";
                            echo "<td><img src='./images/" . $row['Picture'] . "' width='70px'  height='50px'></td>";
                            echo "<td>" . $row['ProductName'] . "</td>";
                            echo "<td>" . $row['Category'] . "</td>";
                            echo "<td>" . $row['ProductDescription'] . "</td>";
                            echo "<td><center>" . $row['Price'] . "</center></td>";
                            echo "<td><center>" . $row['QuantityStock'] . "</center></td>";

                            $count++;

                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <center>
                    <h1>ร้านเกล็ดนที Shop 123 หมู่ 5 ตำบลหัวนา อำเภอเดิมบางนางบวช จ.สุพรรณบุรี 72120</h1>
                </center>
            </td>
        </tr>
    </table>
</body>

</html>