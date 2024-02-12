<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="sddia4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include("sddia4con.php");

// Fetch data from the database
$result = $conn->query("SELECT * FROM artist");
?>

<table> 
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
        <th>Jaar</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['country']; ?></td>
            <td><?php echo $row['jaar']; ?></td>
            <td><a href="sddia4up.php?id=<?php echo $row['id']; ?>">Update</a></td>
            <td><a href="sddia4del.php?id=<?php echo $row['id']; ?>">Verwijderen</a></td>
        </tr>
    <?php } ?>

</table>

<form method="post">
    <input type="text" name="name" id="name" placeholder="Name"> <br>
    <input type="text" name="country" id="country" placeholder="Country"><br>
    <input type="text" name="jaar" id="jaar" placeholder="Jaar"> <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php  
$conn->close();
?>
</body>
</html>
