<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT cashier.name cashier, product.name product, category.name category, price, product.id id
FROM cashier JOIN product
ON cashier.id = product.id_cashier
JOIN category
ON category.id = product.id_category");
?>

<html>

<body>
    <a href="add.php">Add</a><br /><br />

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Cashier</th>
                <th>Product</th>
                <th>Category</th>
                <th>Price</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $x=1; foreach ($result as $data) { ?>
            <tr>
                <td><?php echo $x; ?></td>
                <td><?php echo $data['cashier']; ?></td>
                <td><?php echo $data['product']; ?></td>
                <td><?php echo $data['category']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td style="text-align: center;">
                    <a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a> | <a
                        href="delete.php?id=<?php echo $data['id'] ?>">Delete</a>
                    </<a>
                </td>
            </tr>
            <?php $x++; } ?>
        </tbody>
    </table>

</body>

</html>