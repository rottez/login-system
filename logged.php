
<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'login';
    // db connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
    if ($conn->connect_error){
        echo $conn->connect_error;
    }
    // check user info
    $newUsername = mysqli_real_escape_string($conn, $_POST['user']);
    $newPassword = mysqli_real_escape_string($conn, $_POST['pass']);
    $result = $conn->query("SELECT * FROM users WHERE username = '$newUsername' AND password = '$newPassword'");
    // check if accessed or denied
    if (mysqli_num_rows($result)){
        echo "<meta http-equiv=Refresh content=0.1;url=user.html>";
    } else {
        echo "<meta http-equiv=Refresh content=0.2;url=denied.html>";
    }
    $conn->close();
?>

