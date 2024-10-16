<?php
// Array containing usernames for authentication
$users = array("AliAwlady", "HatemAwlady", "AhmedAwlady");
// Array containing passwords for each user
$passwords = array("A099", "H098", 'A097');

// Total number of users
$num_users = sizeof($users);

// Variable to track whether the user is valid during authentication
$valid_user = 0;

// code to authenticate if user exists to open main.php page
if (isset($_POST["submit"])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    for ($i = 0; $i < $num_users; $i++) {
        if (($user == $users[$i]) && ($pass == $passwords[$i])) {
            $valid_user = 1;
            break;
        }
    }
    if ($valid_user == 0) {
        echo "<script>alert('Invalid user name or password try again')</script>";
    } else {
        // Construct the URL for the admin homepage with the username as a query parameter
        $adminPageURL = "admin-homepage.php?user=" . urlencode($user);

        // Redirect the user to the admin homepage with the constructed URL
        echo "<script>window.location.href = '$adminPageURL';</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asar&family=Raleway:ital,wght@0,100..900;1,100..900&family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awlady Orphanage</title>
    <link rel="stylesheet" href="style/main_style.css">
    <link rel="stylesheet" href="style/admin_style.css">
    
    <style>
        .homePageHeader {
            width: 100%;
            height: 65vh;
            background-image:linear-gradient(rgba(0,0,0,0.3),transparent), url("img/head-flip.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 0 8%;
            position: relative;
        }
    </style>
</head>
<body>
    <div class="mainContainer">
        <div class="homePageHeader">
            <nav>
                <img src="img/logo.png" class="logo">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="our_programs.html">Our Programs</a></li>
                    <li><a href="donate.html">Donate</a></li>
                    <li><a href="contact_us.html">Contact Us</a></li>
                    <li></li>
                </ul>
                <a href="login.html"><span class="material-symbols-outlined">login</span></a>
            </nav>
            <div class="headerTextBox-center">
                <h1></h1>
            </div>
        </div>

        <div class="divider"></div>
        <div class="container">
            <div class="form-box">
                <h1>Sign in</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" id="user" name="user" placeholder="Username" required>
                        </div>
                        <div class="input-field">
                            <input type="password" id="pass" name="pass" placeholder="Password" required>
                        </div>
                        <p>Lost Password <a href="forgot e.html">Click here</a></p>
                    </div>
                    <div class="submit">
                        <input type="submit" name="submit" value="SUBMIT" style="color: white;">
                    </div>
                    <div class="btn-field">
                        <a href="sign in.html">Sign Up</a> 
                        <a href="login.html">Sign In</a>
                    </div>
                </form>
                
            </div>
        </div>

        <div class="footer">
            <div class="social">
                <h3>LET'S STAY IN TOUCH</h3>
                <p>
                    Stay connected with us and never miss out on our latest updates and offers!<br>
                    Follow us on social media to stay in the loop.<br> 
                    Together, let's create unforgettable<br> moments! <br>
                </p>
                <div class="btn">
                    <a href="contact_us.html">CONNECT NOW</a>
                </div>
                <a href="#"><img src="img/facebook-black.svg"></a>
                <a href="#"><img src="img/twitter-black.svg"></a>
                <a href="#"><img src="img/insta-black.svg"></a>
                <a href="#"><img src="img/youtube-black.png"></a>
            </div>
            <footer>
                <span><p>COPYRIGHT © 2020 AWLADY ORPHANAGE, CAIRO, EGYPT - ALL RIGHTS RESERVED.</p></span>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="our_programs.html">Our Programs</a></li>
                    <li><a href="donate.html">Donate</a></li>
                    <li><a href="contact_us.html">Contact Us</a></li>
                </ul>
            </footer>
        </div>
    </div>
</body>
</html>
