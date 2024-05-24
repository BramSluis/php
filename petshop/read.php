<?php
include_once "conn.php";
$conn = dbconnect();
$query = $conn->query("SELECT * FROM pet");
?>
<table> 
    <tr>
        <th>pet_no</th>
        <th>Petname</th>
        <th>species</th>
        <th>gender</th>
        <th>birthdate</th>
        <th>owner</th>
        <th>active</th>
</tr>
<?php while ($row = $query->fetch_assoc()) { ?>

    <tr>
        <td><?php echo $row['pet_no']; ?></td>
        <td><?php echo $row['pet_name']; ?></td>
        <td><?php echo $row['species']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['birthdate']; ?></td>
        <td><?php echo $row['owner']; ?></td>
        <td><?php echo $row['active']; ?></td>
        <td><a href="update.php?id=<?php echo $row['pet_no']; ?>"> Update</a> </td>
        <td> <a href="delete.php?id=<?php echo $row['pet_no'];?>"> Verwijderen</a> </td>
</tr>
<?php } ?>
</table>

