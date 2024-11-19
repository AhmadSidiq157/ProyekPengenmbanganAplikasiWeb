<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Multi User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="mlayusports.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <img src="logo2.png" alt="Logo"> 
                    </div>
                    <div class="card-body">
                        <h4 class="text-center">Login ke akun Anda</h4>
                        <form action="ACT-LOGIN.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <i class="icon bi bi-envelope-fill"></i>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <i class="icon bi bi-lock-fill"></i>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">Login</button>
                    </form>


                        <a href="REGISTRASI.php" class="btn btn-secondary btn-block mt-3">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
