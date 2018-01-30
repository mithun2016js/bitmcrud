<?php
use App\Car\Car;
include '../../vendor/autoload.php';
$object = new Car();
$oneData=$object->setData($_GET)->show();

?>

<table border="1">
	<th>SL</th>
 	<th>ID</th>
 	<th>Title</th>
 	<th colspan="2">Action</th>
 	<tr>
 		<td><?php echo $oneData['id'] ?></td>
 		<td><?php echo $oneData['title'] ?></td>
 		<td><a href="#?id=<?php echo $oneData['id'] ?>">EDIT</a></td>
 		<td><a href="delete.php?id=<?php echo $oneData['id'] ?>">DELETE</a></td>
 	</tr>
</table>