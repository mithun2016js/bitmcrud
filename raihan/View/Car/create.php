
<?php 
include('../../inc/header.php');

?>

<div class="panel panel-default">
                <div class="panel-heading">
                    <h2>
                        Enter Your Car Name 
                        <a class="btn btn-success pull-right" href="index.php">See All List</a>
                    </h2> 
                </div>
    <div class="panel-body">
        <fieldset>
	<?php 
            session_start();
            if( isset($_SESSION['Message']) && !empty($_SESSION['Message'])){
                    echo "<span style='font-size:18px;color:green;'>". $_SESSION['Message']."</span>" ;
                    unset($_SESSION['Message']);
            }
            ?>
	<form action="store.php" method="post">
            <div class="form-group">
                <label for="name">Car Name</label>
                <input class="form-control" type="text" name="car_model" id="name" required="1"/>
            </div>
             <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Save" />
            </div>
	</form>
        </fieldset>
    </div>


<?php include('../../inc/footer.php');?> 