<?php
session_start();
require_once('users.php');

$error_message = '';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $u = new User();
    $result = $u->login($email, $password);
    
    if($result){
        $_SESSION['user_id'] = $result['UserID'];
        $_SESSION['user_name'] = $result['FullName'];
        $_SESSION['user_email'] = $result['Email'];
        $_SESSION['role'] = $result['Role']; // Store user role in session

        $_SESSION['logged_in'] = true; // per me i tregu sistemit qe je ky user eshte i loguar

        header('Location: index.php');
        exit();
    } else {
        $error_message = 'Invalid email or password. Please try again or sign up first.';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istudio Login</title>
    <link rel="stylesheet" href="loginstyle.css">

</head>

<body>
        <header>
        <?php include 'navbar.php'; ?>
    </header>
   
    <div class="login-container">
        <div class="form-box">
             <form action="" method="POST" onsubmit="return Validate()" novalidate>
                <div class="welcome-sign">
                    <h3>WELCOME BACK!</h3>
                    <p>Log in to your account</p>
                    <br>
                </div>
                <div class="google-sign">
                    <button type="button" class="g-btn">
                        <img src="icons8-google-50 (1).png" alt="">
                        Sign in with Google</button>

                </div>
                <br><br>
                <div class="separator-div">
                    <div class="separator">
                        <span>OR</span>
                    </div>
                </div>

                <br><br>
                <div class="input-box">
                    <input type="email" id="user" name="email" placeholder="Email" class="input-field" required> 
                     <p id="mesazhi1" ></p> 
                    <input type="password" id="password" name="password" placeholder="Password" class="input-field" required>
               <p id="mesazhi2" ></p>     
                </div>
                <div>
                 <p id="mesazhi" style="color: red;"><?php echo $error_message; ?></p> <br> 
                </div>
                <div class="sign-up">
            
                    <p>Don't have an account ? <a href="signup.php">Sign Up!</a></p>
                
                </div>
                <div class="log-in">
                    <button type="submit" name="login">Login</button>
                </div>

            </form>
        </div>
  </div>
  <script src="login.js"></script>
</body>

</html>
