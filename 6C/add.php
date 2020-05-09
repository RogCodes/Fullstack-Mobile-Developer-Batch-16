<html>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form action="add.php" method="post">
        <table width="25%" border="0">
            <tr>
                <td><select name="cashier">
                        <option value="1">Pevita Pearce</option>
                        <option value="2">Raisa Andriana</option>
                        <option value="3">Randi Maulana Akbar</option>
                    </select></td>
            </tr>
            <tr>
                <td><select name="category">
                        <option value="1">Food</option>
                        <option value="2">Drink</option>
                    </select></td>
            </tr>
            <tr>
                <td><input type="text" name="product" placeholder="product"></td>
            </tr>
            <tr>
                <td><input type="text" name="price" placeholder="price"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $product = $_POST['product'];
        $price = $_POST['price'];
        $id_category = $_POST['category'];
        $id_cashier = $_POST['cashier'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO product(name,price,id_category,id_cashier) VALUES('$product','$price','$id_category','$id_cashier')");

        header("Location:index.php");
    }
    ?>
</body>

</html>