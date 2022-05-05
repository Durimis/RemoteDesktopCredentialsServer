<?php
    include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/main.css">

    </head>
    <body>
        <table>
            <thead> <td>ID</td> <td>Name</td> <td>Invitation</td><td>Password</td><td>State</td><td>App</td></thead>
<?php 
    $ftesa = $_GET['ftesa'];
    $pasi = $_GET['pasi'];
    echo $ftesa;
    echo $pasi;
    $result = mysqli_query($con,"SELECT * FROM support");
    while($row = mysqli_fetch_array($result))
    {
        echo '<tr>';
        echo '<td>' . $row['id'] .'</td> <td>' . $row['Name'] . '</td> <td>' . htmlspecialchars($row['Invitation']) .'</td> <td>' . $row['Password'].'</td> <td>' . $row['State'].'</td> <td>' . '<a href="/download/view' . $row['id'].  '.zip" >Download</a>' . '</td>' ;
        echo "</tr>";
    }

?>
       </table>
    </body>
</html>
<?php
    include("includes/footer.php");
?>