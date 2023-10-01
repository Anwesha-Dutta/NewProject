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
    <title>Registration</title>
    <style>
        body{
            background-color: #f0f0f0;
        }

        form{
          margin-left:auto;
          margin-right:auto;
          max-width:350px;
          background-color: white;
          padding:50px;
        }
        label{
            color:black;
            font-weight:normal;
            font-size:18px;
        }

        input{
            padding:15px 8px;
             border:1px solid  #dedede;
            width:95%;
            border-radius:10px;
        }
        input.active{
            border:2px solid #dedede;
            border-radius:4px;
        }
        .btn{
            background-color:black;
            color:white;
            font-weight:bold;
            margin-top:25px;
        }
       form h2{
            color:black;
            font-weight:800;
            font-size:24px;
            margin-bottom:36px;
            text-align:left;
            margin-top:0;
        }
         .text-center img{
            width:100px;
            margin-bottom:24px;
            /* margin-left:auto; 
            margin-right:auto; */
            /* display:flex;
            align-items:center;
            justify-content:center; */
        
         }
         .text-center{
            text-align:center;
            /* margin-left:auto;
            margin-right:auto; */
         }

     form h6{
      color: #757575;
      font-family: 'Mulish';
      font-size:16px;
      font-weight:normal;
      margin-bottom:12px;
      margin-top:0;
     }

     .footer{
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:20px;
        
     }
     .SignIn{
        font-weight:bold;
        cursor:pointer;
        padding-left:5px;
     }
     .SignIn a{
        text-decoration:none;
        color:black;
        font-weight:bold;
     }
    

        </style>
</head>

<!-- <body background ="images/bedroom.jpg"> -->
       
   
    <form action =""  method ="POST">
        <div class="text-center">
        <img src ="images/logo.png">
        </div>
        <h6>Welcome back!👋</h6>
          <h2>Registration</h2>
    
        <label for ="first_name">First Name</label><br><br>
        <input type ="text" name="first_name" required><br><br>

        <label for ="last_name">Last Name</label><br><br>
        <input type ="text" name="last_name" required><br><br>

        <label for ="email">Email</label><br><br>
        <input type ="text" name="email" required><br><br>

        <label for ="phone_no">Phone Number</label><br><br>
        <input type ="text" name="phone_number" required><br><br>

        <label for ="password">Password</label><br><br>
        <input type ="password" name="password" required><br><br>

       
     <input type ="submit"  class ="btn" name="submit" value ="CONTINUE" ><br><br>
    </form>
    <div class = "footer">
        <p>Already have an account?</p>
        <p class="SignIn"><a href ="Login.php">Sign In</a></p>
    </div>
    
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $conn =mysqli_connect('localhost','root',"",'project'); 

    $first_name =$_POST['first_name'];
    
    $last_name =$_POST['last_name'];
    
    $email =$_POST['email'];
    
    $phone_no =$_POST['phone_number'];
    
    $password =$_POST['password'];

    $checking ="SELECT * FROM registration
    WHERE `Email`='$email'";

    $run=mysqli_query($conn,$checking);
    $total =mysqli_num_rows($run);

    if($total>0)
    {
    "<font color='red'>Already Registered.Please Login<font>";
    }
    else{

    $qry = "INSERT INTO registration
     (`First_Name`,`Last_Name`,`Email`,`Phone_Number`,`Password`)
      VALUES
('$first_name','$last_name','$email','$phone_no','$password')";
  
  $run=mysqli_query($conn,$qry);
 

if($run)
{
    header('Location:read-data.php');
}


    }

 }

?>