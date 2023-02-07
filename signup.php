<html>

<head>
    <title>Signup</title>
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
                <h4>Open a New Account</h4>
                <div>
                    <form action="" method="post">

                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Full Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>

                        <div class="mb-3 mt-3">
                            <label>Gender:</label>
                            <select class="form-control" name="gender" >
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-3">
                            <label>Country:</label>
                            <select class="form-control" name="country">
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="Pakistan">Pakistan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                        </div>
                        <a href="login.php" style="text-decoration: none;">Already Have an Account ?</a>
                        <button id="signup" name="signup" class="btn btn-primary" style="width: 550px;">Sign Up</button>
                        <?php include("useSignUp.php");   ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>