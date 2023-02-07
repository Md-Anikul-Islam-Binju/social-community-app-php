<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="p-3 bg-primary text-white text-center">
        <h4>Community Bulding</h4>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <img src="style/banner-image/site-baner-image.png" alt="" style="height: 300px; width:500px;">
              
            </div>
            
            <div class="col-sm-6">
                <h4>Login Your Account</h4>
                <div>
                    <form action="" method="post">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                        </div>

                        <a href="signup.php" style="text-decoration: none;">Have No Account, Please Open Your Account?</a>
                        <a href="forgot_account.php" style="text-decoration: none;float: right;">Forgot Password ?</a>
                        <button id="login" name="login" class="btn btn-primary" style="width: 550px;">Login</button>
                        <?php include("useLogin.php");   ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>