<?php
include('connection.php');
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Communication Buildup</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="massage.php?user_id=new">Massage</a></li>
                <li><a href="#">Find Friend</a></li>
                <li><a href="myPost.php?user_id=$id">My Post</a></li>
                <li><a href="editProfile.php?user_id=$id">Edit Account</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            
            <form class="navbar-form navbar-left" action="/action_page.php" >
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

        <div>
            <ul>
                <?php
                
                $user = $_SESSION['email'];
                $getUser = "select * from users where email='$user'";
                $runUser = mysqli_query($conn,$getUser);
                $row = mysqli_fetch_array($runUser);

                $id = $row['id'];
                $userName = $row['user_name'];
                $name = $row['name'];
                $email = $row['email'];
                $details = $row['details'];
                $relation = $row['relation'];
                $password = $row['password'];
                $gender = $row['gender'];
                $country = $row['country'];
                $profile = $row['profile'];
                $cover = $row['cover'];
                $birthday = $row['birthday'];
                $register_date = $row['register_date'];
                $recovery_account = $row['recovery_account'];
                $phone = $row['phone'];

                $userPost= "select * from posts where user_id='$id'";
                $runPost = mysqli_query($conn,$userPost);
                $posts = mysqli_num_rows($runPost);

                ?>
            </ul>
        </div>
    </nav>
</body>
</html>