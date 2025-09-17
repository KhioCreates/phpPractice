<?php
    $error_message = "";

    if(isset($_REQUEST['btnSubmit'])){ 
        if(empty($_REQUEST['fullname']) or empty($_REQUEST['email'])or empty($_REQUEST['gender'])or empty($_REQUEST['gender'])){
            $error_message = "All inputs are required!";
        } 
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- get - send data thru url -->
    <!-- post - send data thru http -->
    <?php 
        if($error_message != ""){
            echo "Error: $error_message";
        } 
    ?>
    <form action="receive_page.php" method="post">
        <label for="">Fullname: </label>
        <input type="text" name="fullname">
        <br>
        <label for="">Email: </label>
        <input type="email" name="email">
        <br>
         <label for="">Gender: </label>
        <input type="text" name="gender">
        <br>
        <label for="">Age: </label>
        <input type="number" name="age">
        <br>
        <input type="submit" name="btnSubmit">
    </form>

    <?php print_r($_REQUEST); ?>

    

</body>
</html>