<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Users Page</h1>
    <?php if (empty($vars['users'])) { ?>
    <h2>No Users</h2>
    <?php } ?>
    <?php if (!empty($vars['users'])) { ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <?php foreach($vars['users'] as $user) {?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->firstName . ' ' . $user->secondName; ?></td>
                </tr>
            <?php }?>
        </table>
    <?php }?>
</body>
</html>