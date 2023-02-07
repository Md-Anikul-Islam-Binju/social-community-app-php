<html>

<?php
session_start();
include('database/header.php');
if (!isset($_SESSION["email"])) {
    header("location:index.php");
}

?>

<head>
    <?php

    $user = $_SESSION['email'];
    $getUser = "select * from users where email='$user'";
    $runUser = mysqli_query($conn, $getUser);
    $row = mysqli_fetch_array($runUser);
    $name = $row['name'];
    ?>
    <title><?php echo "$name"; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey">
    <div class="w3-content w3-margin-top" style="max-width:1400px;">
        <div class="w3-row-padding">
            <div class="w3-third">
                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <br>
                        <img src="images/profile/<?php echo $profile; ?>" style="height:200px; width:200px;  border-radius: 50%; 
                        display: block;margin-left: auto; margin-right: auto;" alt="Profile">
                    </div>

                    <h4 style="color: blcak; text-align: center;"><?php echo "$name"; ?></h4>
                    <div class="w3-container">
                        <p class="w3-large"><b>About User</b></p>
                        <p><?php echo"$details";  ?></p>
                        <hr>
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "$birthday";  ?></p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo"$email"; ?></p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo"$phone"; ?></p>
                        <br>

                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="file" name="profile"></input><br>
                            <button type="submit" name="profileUpload" class="btn btn-info" >Uploade Profile</button>
                        </form>
                        <?php
                        if(isset($_POST['profileUpload'])){
                            $profile = $_FILES['profile']['name'];
                            $imgTemp = $_FILES['profile']['tmp_name'];
                            $randNum = rand(1,100);

                            if($profile=='')
                            {
                                echo "Please choice an Image for your Profile";
                            }else{
                                move_uploaded_file($imgTemp,"images/profile/$profile.$randNum");
                                $profileImageUpload = "update users set profile='$profile.$randNum' where id='$id'";
                                $upload = mysqli_query($conn, $profileImageUpload);

                                if($upload){
                                    echo "Profile Image Upload Successfully";
                                }
                            }
                        }
                        ?>

                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="file" name="cover"></input><br>
                            <button type="submit" name="coveUpload" class="btn btn-info" >Uploade Cover</button>
                        </form>
                        <?php
                        if(isset($_POST['coveUpload'])){
                            $cover = $_FILES['cover']['name'];
                            $imgTemp = $_FILES['cover']['tmp_name'];
                            $randNum = rand(1,100);

                            if($cover=='')
                            {
                                echo "Please choice an Image for your Cover";
                            }else{
                                move_uploaded_file($imgTemp,"cover/$cover.$randNum");
                                $coverImageUpload = "update users set cover='$cover.$randNum' where id='$id'";
                                $upload = mysqli_query($conn, $coverImageUpload);

                                if($upload){
                                    echo "Cover Image Upload Successfully";
                                }
                            }
                        }
                        ?>

                    </div>
                </div><br>
            </div>

            <div class="w3-twothird">
                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">

                        <img src="cover/<?php echo $cover; ?>" style="height:300px; width:873px;  " alt="">
                    </div>
                </div><br>
                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
                        <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
                        <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
                    </div>
                </div>

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
                        <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
                        <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="w3-container w3-teal w3-center w3-margin-top">
        <p>Find me on social media.</p>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Md Anikul Islam</a></p>
    </footer>
</body>

</html>