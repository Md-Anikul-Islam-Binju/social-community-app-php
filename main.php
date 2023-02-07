<html>
<head>
    <title>Community Buildin for BM</title>
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
                <h2 style="margin: 10px;">Open a New Account</h2></br>
                <div>
                    <form action="" method="post">
                        <button id="signup" name="signup" class="btn btn-primary" style="width: 400px;    margin: 10px;">Sign Up</button>
                        <?php
                        if(isset($_POST['signup']))
                        {
                            echo "<script>window.open('signup.php','_self')</script>";
                        }
                        ?>
                        <button id="login" name="login" class="btn btn-primary" style="width: 400px; margin: 10px;">Login</button>
                        <?php
                        if(isset($_POST['login']))
                        {
                            echo "<script>window.open('login.php','_self')</script>";
                        }

                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>