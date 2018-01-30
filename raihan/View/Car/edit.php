<?php
use App\Car\Car;
include '../../vendor/autoload.php';
$object = new Car();
//$object->store();
$oneData=$object->setData($_GET)->show();
 
?>

<?php 
include('../../inc/header.php');

?>

<div class="panel panel-default">
                <div class="panel-heading">
                    <h2>
                        Edit Your Car Name 
                        <a class="btn btn-success pull-right" href="index.php">See All List</a>
                    </h2> 
                </div>
    <div class="panel-body">
        <fieldset>
	<form action="update.php" method="post">
            <div class="form-group">
                <label for="name">Car Name</label>
                <input class="form-control" type="text" name="car_model"  value="<?php echo $oneData['title'] ?>" required="1"/>
                <input type="hidden" name="id" value="<?php echo $oneData['id'] ?>">
            </div>
             <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Update" />
            </div>
	</form>
        </fieldset>
    </div>


<?php include('../../inc/footer.php');?> 

