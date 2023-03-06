<?php 
$hostname="localhost";
$username="root";
$password="";
$databasename="attt";
$connect= mysqli_connect($hostname, $username, $password, $databasename);

// if (mysqli_connect_errno()) {
//     echo "Faled to connect";
//     exit();

// }else{
//     echo "Success";
// }

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form action="" method="post">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
  </div>
</form>
</body>
</html>
<?php 
$user= $_POST["username"];
$pass= $_POST["password"];

$sql= "SELECT * FROM login WHERE username='$user' AND password='$pass'"; 

$query= mysqli_query($connect, $sql);

if (mysqli_fetch_row($query)) {
    header('location: account.php');
}else{
    echo "Đăng nhập thất bại";
}
































?>