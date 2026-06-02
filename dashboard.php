
<?php
require 'connect.php';
$result = $conn->query("SELECT * FROM alert");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body style="display:flex-column">
    <h1 style = "text-align: center; color: rgb(37, 37, 43);"><i>
        system dashboard
</i></h1>
<table style= "margin: 0 auto; border-collapse: collapse; border-radius: 10px">
        <thead>
            <tr>
                <th style= "border: 1px solid black; padding: 10px;">#</th>
                <th style= "border: 1px solid black; padding: 10px;">distance_cm</th>
                <th style= "border: 1px solid black; padding: 10px;">status</th>
                <th style= "border: 1px solid black; padding: 10px;">created_at</th>
            </tr>
        </thead>
        <tbody style=" border: 1px;">
            <?php
             while ($row = $result->fetch_assoc()) {
             ?>
             
                <tr>
                    <td style= "border: 1px solid black; padding: 10px;"><?=($row['id']) ?></td>
                    <td style= "border: 1px solid black; padding: 10px;"><?=($row['distance_cm']) ?></td>
                    <td style= "border: 1px solid black; padding: 10px;"><?=($row['status']) ?></td>
                    <td style= "border: 1px solid black; padding: 10px;"><?=($row['created_at']) ?></td>
                </tr>
            <?php 
            }
             ?>
        </tbody>
    </table>
   
</body>
</html>
