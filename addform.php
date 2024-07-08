<!DOCTYPE html>
<html>
    <head>
        <meta charset=""utf-8>
        <title>Add Product</title>
    </head>
    <body>
        <table width="100%" border="1">
            <tr>
                <td colspan="4">
                    <center><h1>เพิ่มสินค้า</h1></center>
                </td>
            </tr>
            <tr>
                <td><a href="./index.php">Home</a></td>
                <td><a href="./data_edit.php">Manage Product</a></td>
                <td><a href="./addform.php">Craete a new Product</a></td>
            </tr>
            <tr height="380px">
                <td colspan="4">
                    <form method = "POST" action="add_process.php">
                        <input type="hidden" name="ProductID" value="">
                        <table width="100%">
                            <tr>
                                <td>ชื่อสินค้า</td>
                                <td>
                                    <input type="text" name ="ProductName" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>ภาพสินค้า</td>
                                <td>
                                    <input type="text" name ="Picture" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>ประเภทสินค้า</td>
                                <td>
                                    <input type="text" name ="Category" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>รายละเอียดสินค้า</td>
                                <td>
                                    <textarea name ="ProductDescription"  rows="5" cols="40"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>ราคาสินค้า</td>
                                <td>
                                    <input type="text" name ="Price" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>จำนวนสินค้า</td>
                                <td>
                                    <input type="text" name ="QuantityStock" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="button" value="Delete">
                                </td>
                                <td>
                                    <input type="submit" name ="submit" value="Save">
                                </td>
                                <td>
                                    <input type="button"  value="Cancel">
                                </td>
                            </tr>

                        </table>
                    </form>
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