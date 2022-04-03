<?php 
include 'includes/autoloader.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Document</title>
</head>
    <body>
    
    <?php
    $studentObj = new studentView();
    $studentObj->showStudent("201510");
    
    $studentObj2 = new StudentContr();
    $studentObj2->createStudent("201099", "Jane", "Economy", "90", "80");
    
	?>
    </body>
    
</html>
