<?php 
include('inc/header.php');

?>
<?php
use App\Car\Car;
include 'vendor/autoload.php';
$object = new Car();
$allData =$object->index();
 ?>
<?php
/*Session::init();
$msg= Session::get('msg');
if(!empty($msg)){
    echo '<h3 class="alert alert-info text-center">'.$msg.'</h2>';
    //Session::unsetmsg();
    Session::set('msg', NULL);
}*/
?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Car List 
                        <a class="btn btn-success pull-right" href="View/car/trashlist.php">Trash Data</a>
                        <a class="btn btn-success pull-right" href="View/car/create.php"style="margin-right: 5px;">Add New Car</a>
                    </h2> 
                </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <tr>
                         <th width="10%">Serials</th>
                        <th width="10%">ID</th>
                        <th width="10%">Title</th>
                        <th width="10%">Action</th>
                    </tr>
                    <?php 
                    $sl=1;
                    foreach ($allData as $oneData) { ?>


                    <tr>
                            <td><?php echo $sl++ ?></td>
                            <td><?php echo $oneData['id']; ?></td>
                            <td><?php echo $oneData['title']; ?></td>
                            <td>
                                <a class="btn btn-default" href="View/car/edit.php?id=<?php echo $oneData['id'] ?>">EDIT</a>
                                <a class="btn btn-danger" href="View/car/trash.php?id=<?php echo $oneData['id'] ?>" onclick="return confirm('Are you sure to Delete..!')">DELETE</a>
                            </td>
                            
                    </tr>

                    <?php } ?>
                    
                </table>
            </div>
            </div>

  <?php include('inc/footer.php');?>         