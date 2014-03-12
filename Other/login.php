<?php
    session_start();
    include_once $_SESSION['prefix']."library.php";
    include_once $_SESSION['prefix']."fanbot.php";

    $cxn=connect_to_server();
    $displayName=isset($_POST['displayName'])? $_POST['displayName']:"";
    $email=isset($_POST['email'])? $_POST['email']:"";
    $password=isset($_POST['password'])? $_POST['password']:"";
    $query="SELECT * from User 
        WHERE password='$password' 
        AND (displayName='$displayName' OR email='$email')";
    $result=mysqli_query($cxn,$query);
    $row_cnt = mysqli_num_rows($result);

    if($row_cnt)
    {
        $row = mysqli_fetch_assoc($result);
        $user=new User($cxn,$row,NULL);
        $_SESSION["user"]=$user;
        header('Location:'.$_SESSION['prefix'].'index.php');
    }
    else {
        printf('Result set has %d rows.\n', $row_cnt);
    }
    // Close result set and database connection.
    mysqli_free_result($result);
    mysqli_close($cxn);
?>
<html>
<body>
<form action="../login.php" method=post>
<label for='link'>Nickname or Email:</label>
		<input type='text' name='nickname' /><br />
<label for='link'>Password:</label>
		<input type='password' name='password' /><br />
		<input type='submit' id="login" value='Login' />
</form>
</body>
</html>
