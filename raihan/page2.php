<?php
	session_start();
	
	if($_SESSION["email"]=="nahid_rhmn@yahoo.com"){echo "Welcome";}
	else{header("Location:error.php");}
?>
<h1>This is Page2</h1>
<?php
if($_SESSION["id"]=="1"){
?> 

<h2>Protected id 1</h2>
<?php } else{ ?>
<h2>Protected id 2</h2>
<?php } ?>