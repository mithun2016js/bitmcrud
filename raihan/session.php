<?php
session_start();
$_SESSION["id"]=2;
$_SESSION["email"]="nahid_rhmn@yahoo.com";
?>
<a href="page2.php">next</a>
<?php
print_r($_SESSION);
?>