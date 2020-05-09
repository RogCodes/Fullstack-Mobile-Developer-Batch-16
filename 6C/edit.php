<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $product = $_POST['product'];
    $price = $_POST['price'];
    $id_category = $_POST['category'];
    $id_cashier = $_POST['cashier'];

    $result = mysqli_query($mysqli, "UPDATE product SET name='$product', price='$price', id_category='$id_category', id_cashier='$id_cashier' WHERE id= $id");

    header("Location: index.php");
}
?>

<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT cashier.name cashier, product.name product, category.name category, price, product.id id
FROM cashier JOIN product
ON cashier.id = product.id_cashier
JOIN category
ON category.id = product.id_category
WHERE product.id= $id");

while ($user_data = mysqli_fetch_array($result)) {
    $product = $user_data['product'];
    $price = $user_data['price'];
    $category = $user_data['category'];
    $cashier = $user_data['cashier'];
}
?>

<html>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form method="post" action="edit.php">
        <table border="0">
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
                <td><input type="text" name="product" value=<?php echo $product; ?>></td>
            </tr>
            <tr>
                <td><input type="text" name="price" value=<?php echo $price; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>