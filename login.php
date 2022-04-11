

<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="studentlogin.html">
        <!-- need to create a login.html page for the login for students and tutors-->
        <input type="username" name="email" placeholder="USERNAME" />
        <input type="password" name="password" placeholder="PASSWORD" />
        <button type="submit">LOGIN</button>
    </form>

    <?php
    mysqli_select_db($con, 'login');

    $email = $_post['email'];
    $password =$_post['password']


    $sql = "SELECT * FROM utop WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($con, $sql);





    ?>
</body>

</html>