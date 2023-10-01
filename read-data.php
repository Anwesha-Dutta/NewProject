
<?php
$conn =mysqli_connect('localhost','root',"",'project');
$qry="SELECT * FROM registration";
$run =mysqli_query($conn,$qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration/Login</title>
</head>
<body>
    <table width = "40%"  border ="3" cellspacing ="0">
        <tbody>
            <tr>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Email</th>
                <th>Phone_Number</th>
                <th>Password</th>
          </tr>



<?php
while($data=mysqli_fetch_assoc($run))
{
   echo "<tr><td>".$data['First_Name']."</td>"
    ."<td>".$data['Last_Name']."</td>"
    ."<td>".$data['Email']."</td>"
    ."<td>".$data['Phone_Number']."</td>"
    ."<td>".$data['Password']."</td></tr>";
}
?>


</tbody>
<table>

</body>
</html>