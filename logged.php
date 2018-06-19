<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'login';

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
    if ($conn->connect_error){
        echo $conn->connect_error;
    }
    $newUsername = mysqli_real_escape_string($conn, $_POST['user']);
    $newPassword = mysqli_real_escape_string($conn, $_POST['pass']);

    $result = $conn->query("SELECT * FROM users WHERE username = '$newUsername' AND password = '$newPassword'");

    if (mysqli_num_rows($result)){
        // echo "SELECT * FROM users WHERE users_username = '$newUsername' AND users_password='$newPassword'"; 
        echo "<meta http-equiv=Refresh content=0.01;url=user.html>";
    } else {
        echo "Login unsuccessful, please try again!"; 
        echo "<meta http-equiv=Refresh content=3;url=index.html>";

    }
    $conn->close();
?>
