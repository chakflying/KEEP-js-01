<?php

if(isset($_POST['submit']) || true){
    $data_missing = array();
    if(empty($_POST['email'])){
        $data_missing[] = 'Email';
    }
    else {
        $email = trim($_POST['email']);
    }
    if(empty($_POST['username'])){
        $data_missing[] = 'Username';
    }
    else {
        $username = trim($_POST['username']);
    }
    if(empty($_POST['pwd'])){
        $data_missing[] = 'Password';
    }
    else $pwd = $_POST['pwd'];
    $sex = $_POST['sex'];
    
    if(empty($data_missing)){
        require_once('connect.php');
        $query = "INSERT INTO users (userID, username, email, pwd, sex, date_created) VALUES (NULL,?,?,?,?,NOW())";
        
        $stmt = mysqli_prepare($dbc, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $pwd, $sex);
        mysqli_stmt_execute($stmt);
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1) {
            echo 'User Created!';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }
        else {
            echo '<script>console.log('.mysqli_error($dbc).');</script>';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }
    }
    else {
        echo 'Data missing:<br>';
        foreach($data_missing as $missing) {
            echo "$missing<br>";
        }
    }
}