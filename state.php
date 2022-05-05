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
    $state = $_GET['state'];
    mysqli_query($con,"UPDATE support SET State='$state' WHERE id='$id'");
    mysqli_close($con);
?>
    </body>
</html>
<?php
    include("includes/footer.php");
?>