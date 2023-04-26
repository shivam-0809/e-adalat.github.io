 <?php include("connection.php"); ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Court Case | Find your details here</title>
    <link rel="shortcut icon" href="https://lawware.co.uk/wp-content/uploads/2021/08/balance.svg">
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="stylelogin1.css">

</head>

<body>
    <img src="wlogo.png" width="200" id="name">
    <form action="#" method="post">
        <div class="login-box">
            <h2>User Login</h2>
            <form>
                <div class="user-box">
                    <input type="text" name="uname" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div href="home.html">
                <input type="submit" name="submit" value="Submit">
                <a href="home.html" id="nxt">Next</a>
                </div>
            </form>
        </div>
    </form>
</body>

</html>


 <?php
   if($_POST['submit'])
   {
    $uname       = $_POST['uname'];
    $password    = $_POST['password'];
    // $email       = $_POST['email'];
    // $pnumber     = $_POST['pnumber'];

    $query = "INSERT INTO USIGNIN values('$uname','$password')";

    $data = mysqli_query($conn,$query);
   
   if($data)
   {
      echo "";
   }
   else{
      echo "failed";
   }

}
?>  