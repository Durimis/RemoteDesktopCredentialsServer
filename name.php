<?php
    include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
<?php
    $id = $_GET['id'];
    $name = $_GET['name'];
    mysqli_query($con,"UPDATE support SET Name='$name' WHERE id='$id'");
?>
            
    </body>
</html>
<?php
    include("includes/footer.php");
?>
