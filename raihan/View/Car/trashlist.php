<?php 
include('../../inc/header.php');

?>
<?php
use App\Car\Car;
include '../../vendor/autoload.php';
$object = new Car();
$allData= $object->trashlist();
//print_r($allData);

?>

 <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>
                        Trash List 
                        <a class="btn btn-success pull-right" href="index.php">Back Car List</a>
                    </h2> 
                </div>
            <div class="panel-body">
                <?php
                    if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
                        echo "<span style='font-size:18px;color:green;'>". $_SESSION['message']."</span>" ;
                        unset($_SESSION['message']);
                    }
                ?>
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
                                <a class="btn btn-default" href="restore.php?id=<?php echo $oneData['id'] ?>" onclick="return confirm('Are you sure to Delete..!')">RESTORE</a>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $oneData['id'] ?>" onclick="return confirm('Are you sure to Delete..!')">DELETE</a>
                            </td>
                            
                    </tr>

                    <?php } ?>
                    
                </table>
            </div>
            </div>

  <?php include('../../inc/footer.php');?>   
