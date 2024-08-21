<?php  include 'connection.php' ?>
<?php


    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Check if the username is at least 5 characters and the password is at least 8 characters
        if (strlen($username) < 5) {
            
            echo "<div class='main-container'> Username must be at least 5 characters long.<div>";
        } elseif (strlen($password) < 8) {
            echo "";
            echo "<div class='main-container'>Password must be at least 8 characters long.<div>";
        } else {
            // If both the username and password meet the requirements, insert into the database
            $query_string = "INSERT INTO users (username, password) VALUES ('$username', '$password');";
            $query = mysqli_query($connection, $query_string);
    
            if ($query) {
                
                echo "<div class='main-container'>Account Sucessfully Created.<br>Please Login<div>";
                exit();
            } else {
                echo "Failed to sign up. Please try again.";
                die();
            }
        }
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Query to check if the username exists
        $query_string = "SELECT * FROM users WHERE username = '$username';";
        $query = mysqli_query($connection, $query_string);
    
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);        
    
            // Check if the password matches
            if ($password === $row['password']) {
                // Redirect to the home page if the username and password are correct
                header('Location: home.php');
                exit();
            } else {
                // If the username exists but the password is incorrect
                
                echo "<div class='main-container'> Your Password is incorrect. Please try again<div>";
            }
        } else {
            // If the username doesn't exist
            
            echo "<div class='main-container'>Username not found. Please sign up first to continue.<div>";
        }
    }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Form Integration</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="main-container">
        <h3>Register & Login Form</h3>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="row">
                <button type="submit" name="login" class="btn btn-primary d-inline-block">Login</button>
                <button type="submit" name="signup" class="btn btn-secondary d-inline-block">Sign up</button>
             </div>
        </form>

    </div>
</body>

</html>