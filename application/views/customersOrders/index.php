<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Customer Orders Page</h1>
    <?php if (empty($vars['orders'])) { ?>
    <h2>No Orders</h2>
    <?php } ?>
    <?php if (!empty($vars['orders'])) { ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Saler</th>
                <th>Date</th>
            </tr>
            <?php foreach($vars['orders'] as $order) {?>
                <tr>
                    <td><?php echo $order['id']; ?></td>
                    <td><?php echo $order['saler']; ?></td>
                    <td><?php echo $order['saleDate']; ?></td>
                </tr>
            <?php }?>
        </table>
    <?php }?>
</body>
</html>