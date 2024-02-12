<?php
$query = $conn->query("SELECT * FROM artist");
?>
<table> 
    <tr>
        <th>Naam</th>
        <th>Taakbeschrijving</th>
        <th>Deadline</th>
        <th>Update</th>
        <th>Verwijderen</th>
</tr>
<?php while ($row = $query->fetch_assoc()) { ?>

    <tr>
        <td><?php echo $row['naam']; ?></td>
        <td><?php echo $row['taakbeschrijving']; ?></td>
        <td><?php echo $row['deadline']; ?></td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>"> Update</a> </td>
        <td> <a href="delete.php?id=<?php echo $row['id'];?>"> Verwijderen</a> </td>
</tr>
<?php } ?>
</table>

<script> src="deadline.js"</script> 