<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        border: 1px solid;
        border-collapse: collapse;
    }
</style>
<body>
<a href="index.php?page=add-student">Create Student</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Image</th>
    </tr>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student->getId()?></td>
            <td><?php echo $student->getName()?></td>
            <td><?php echo $student->getAddress()?></td>
            <td><?php echo $student->getEmail()?></td>
            <td><?php echo $student->getImage()?></td>
            <td>
                <button><a href="index.php?page=delete&id=<?php echo $student->getId()?>">Delete</a></button></td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>
<?php
