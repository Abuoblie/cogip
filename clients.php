<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clients</title>
    <link href="Assets/login.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php 
  require_once "Assets/header.php";
?>

<h1>COGIP : Contact directory</h1>

<?php
//just a test for now
$rows = 22;
$cols = 4;
function drawTable($rows, $cols){
echo "<table border='1'>"; 

for($tr=1;$tr<=$rows;$tr++){ 

    echo "<tr>"; 
        for($td=1;$td<=$cols;$td++){ 
               echo "<td align='center'>".$tr*$td."</td>"; 
        } 
    echo "</tr>"; 
} 

echo "</table>";
}

drawTable($rows,$cols);

?> <!-- insert table of client here-->



<?php 
  require_once "Assets/footer.php ";
?>
</body>
</html>
