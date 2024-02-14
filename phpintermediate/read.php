<?php
include_once "connect.php";
$conn = dbconnect();
$query = $conn->query("SELECT * FROM artist");
?>
<table> 
    <tr>
        <th>Naam</th>
        <th>Country</th>
        <th>Jaar</th>
        <th>Update</th>
        <th>Verwijderen</th>
</tr>
<?php while ($row = $query->fetch_assoc()) { ?>

    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['country']; ?></td>
        <td><?php echo $row['jaar']; ?></td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>"> Update</a> </td>
        <td> <a href="delete.php?id=<?php echo $row['id'];?>"> Verwijderen</a> </td>
</tr>
<?php } ?>
</table>

<script src="db.js"> </script> 