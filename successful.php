
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
        <p style="text-align:center;">Account Sucessfully Created.<br>Please Login</p>
        
        <h3>Register & Login Form</h3>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="row">
                <button type="submit" name="login" class="btn btn-primary d-inline-block">Login</button>
                <button type="submit" name="signup" class="btn btn-secondary d-inline-block">Sign up</button>
             </div>
        </form>

    </div>
</body>

</html>