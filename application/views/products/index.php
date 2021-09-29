<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Products Page</h1>
    <?php if (empty($vars['products'])) { ?>
    <h2>No Products</h2>
    <?php } ?>
    <?php if (!empty($vars['products'])) { ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>User</th>
            </tr>
            <?php foreach($vars['products'] as $product) {?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['userFirstName'] . ' ' . $product['userSecondName']; ?></td>
                </tr>
            <?php }?>
        </table>
    <?php }?>
</body>
</html>