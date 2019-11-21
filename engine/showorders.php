<?php 
require("connect.php");

$sql = "SELECT * FROM `orders`";
$result = $mysqli->query($sql);
?>  
<table class="table table-striped table-hover table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">№</th>
            <th scope="col">Oreder</th>
            <th scope="col">Customer</th>
            <th scope="col">Contacts</th>
            <th scope="col">Deadline</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $result->fetch_assoc()) { ?>
		   <th scope="row"><?php echo $row ['id']; ?></th>
		   <td><?php echo $row ['name']; ?></td>
		   <td><?php echo $row ['customer']; ?></td>
           <td><?php echo $row ['contact']; ?></td>
           <td><?php echo $row ['deadline']; ?></td>  	
           <td><?php echo $row ['price']; ?></td>  	 				   				   				  
		   </tr>
		<?php } ?>
    </tbody>
</table>
<?php
$result->free();
$mysqli->close();
?>