<?php
$conn=mysqli_connect('localhost','root',"",'project');
$qry="SELECT * FROM Service";
$run=mysqli_query($conn,$qry);
?>

<html>
    <table width="20%" border ="3" cellspacing ="0">
        <tbody>
            <tr>
                <th>Id</th>
                <th>Img</th>
</tr>


<?php

while($data=mysqli_fetch_assoc($run))
{
    echo "<tr><td>".$data['Id']."</td>".
    "<td>".$data['Img']."</td></tr>";
}

?>
<tbody>
</table>
</html>