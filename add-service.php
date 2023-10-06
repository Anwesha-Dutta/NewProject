<?php
$conn = mysqli_connect('localhost','root',"",'project');
$qry ="SELECT * FROM Service";
$run=mysqli_query($conn,$qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add on Self Service</title>
</head>
<body>

<form action="" method ="POST" enctype="multipart/form-data">
    <label for ="Img">Img</label>
    <input type ="file" name ="Img"><br><br>
    <br>

    <input type="submit" name="submit" value ="Submit" >


</body>
</html>


<?php 

if(isset($_POST['submit']))
{
    $conn = mysqli_connect('localhost','root',"",'project');
    
    
    $img=$_POST['Img'];

    $file_name=$_FILES['Img']['name'];
    $tmp_name =$_FILES['Img']['tmp_name'];

    move_uploaded_file($tmp_name,"images/".$img);


    $query="INSERT INTO Service(`Img`)
    VALUES('$img')";

    $run=mysqli_query($conn,$query);


    if($run){
        echo "<font color='green'>Sucessfully added</font>";
    }
    else{
        echo "<font color='red'>Failed</font>";
    }
}

?>