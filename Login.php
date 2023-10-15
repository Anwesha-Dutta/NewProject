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
    <title>Login</title>
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
     .SignUp{
        font-weight:bold;
        cursor:pointer;
        padding-left:5px;
     }
     .SignUp a{
        text-decoration:none;
        color:black;
        font-weight:bold;
     }
    
        </style>
</head>
<!-- <body background ="images/bed.jpg"> -->
   
    <form action =""  method ="POST">
    <div class="text-center">
        <img src ="images/logo.png">
        </div>
        <h6>Welcome back!👋</h6>
    <h2>Sign in to your account</h2>
    
        <label for ="email">Your email or phone number</label><br><br>
        <input type ="text" name="email" required><br><br>

        <label for ="password">Password</label><br><br>
        <input type ="password" name="password" required><br><br>

        <input type ="submit"  class ="btn"
         name="submit" value ="CONTINUE" ><br><br>
    </form>
    <div class = "footer">
        <p>don't have an account?</p>
        <p class="SignUp"><a href ="Registration.php">Sign Up</a></p>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $conn =mysqli_connect('localhost','root',"",'project'); 
    $email =$_POST['email'];
    $password =$_POST['password'];

    
    $checking ="SELECT * FROM registration
    WHERE `Email`='$email' && `Password`='$password'";

    $run=mysqli_query($conn,$checking);
    if($run){
        header('Location:index.html');
    }
    else{
        "<font color ='red'>Login Failed.Please try again</font>";
    }
}
    ?>