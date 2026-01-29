<?php 
require_once('users.php');
if (isset($_POST['save'])){
    $u= new User();
$u->setName($_POST['FullName']);
$u->setEmail($_POST['Email']);
$u->setPassword($_POST['Password']);
$u->insert();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istudio Sign up</title>
    <link rel="stylesheet" href="signup.css">

</head>

<body>
    <header>
        <nav class="nav">
            <div class="navdiv">
                <ul type="none">
                    <li> <a href="index.php">iSTUDIO</a></li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="signup-container">
        <div class="form-box">
            <form action="" onsubmit="return ValidateSignup()" method="POST" novalidate>
                <div class="welcome-sign">
                    <h3>LET'S GET STARTED!</h3>
                    <p>Bring your dream ambient to life</p>
                    <br>
                </div>
                <div class="google-sign">
                    <button type="submit" class="g-btn">
                        <img src="icons8-google-50 (1).png" alt="">
                        Sign up with Google</button>

                </div>
                <br>
                <div class="separator-div">
                    <div class="separator">
                        <span>OR</span>
                    </div>
                </div>

                 <br>


               <div class="input-box">
                    <input type="text" id="fullname" placeholder="Full Name"  name="FullName" class="input-field" required>
                    <p id="mesazhiName"></p>

                    <input type="email" id="email" placeholder="Email" name="Email" class="input-field" required>
                    <p id="mesazhiEmail"></p>

                    <input type="password" id="password" placeholder="Password" name="Password" class="input-field" required>
                    <p id="mesazhiPassword"></p>

                    <input type="password" id="confirmPassword" placeholder="Confirm Password" class="input-field" required>
                    <p id="mesazhiConfirm"></p>
                </div>


                <div class="log-in">
                    <p>Already have an account ? <a href="login.php">Login!</a></p>
                
                </div>
                <div class="log-in">
                    
                    <button type="submit" name="save">Sign Up</button>
                </div>

            </form>
        </div>
    </div>

    <script src="signup.js"></script>
</body>

</html>