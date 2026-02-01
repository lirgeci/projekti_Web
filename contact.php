<?php
session_start();
require_once('contactsCrud.php');

if(isset($_POST['send'])){
    if(isset($_SESSION['user_id'])){ // siguro qe useri eshte i loguar
        $c = new Contacts();
        $c->setName($_POST['Name']);
        $c->setEmail($_POST['Email']);
        $c->setMessage($_POST['Message']);
        $c->setUserID($_SESSION['user_id']); // kjo eshte thelbesore
        $c->insert();
    } else {
        echo "<script>alert('You must be logged in to send a message');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile | iSTUDIO</title>
  <link rel="stylesheet" href="contact.css" />
</head>

<body>
  <!-- Header -->
  <header>
        <?php include_once 'navbar.php'; ?>
    </header>

  <!-- Intro -->
  <div class="contact-intro">
    <h1>Get in Touch</h1>
    <p>
      Have a project in mind or want to collaborate? Send us a message and
      we’ll get back to you as soon as possible.
    </p>
  </div>

  <!-- Contact Form -->
  <div class="contact-container">
    <div class="contact-info">
      <h2>Contact Info</h2>
      <p>Email: info@istudio.com</p>
      <p>Phone: +383 44 123 456</p>
      <p>Address: Prishtina, Kosovo</p>
    </div>

    <div class="contact-form">
      <?php if (isset($_SESSION['user_id'])): ?>
        <h2>Send a Message</h2>

        <form method="POST">   <!-- Nese useri eshte i loguar i shfaqet forma -->
          <input type="text" placeholder="Your Name" name="Name" required />
          <input type="email" placeholder="Your Email" name="Email" required />
          <textarea placeholder="Your Message" rows="6" name="Message" required></textarea>
          <button type="submit" name="send">Send Message</button>
        </form>

        <?php else: ?>  <!-- Nese useri nuk eshte i loguar nuk i shfaqet forma -->

          <div class="login-warning">
    <p>⚠️ You must be logged in to send a message.</p>
    <a href="login.php"><button>Login</button></a>
    <a href="signup.php"><button>Sign Up</button></a>
      </div>

        <?php endif; ?>
      </form>
    </div>
  </div>


  <!-- Footeri -->
  <footer class="footer">
    <div class="footer-top">
      <div class="footer-column">
        <h3>iSTUDIO</h3>
        <p>
          Creating refined, functional, and visually balanced interior designs
          for residential, commercial, and product projects.
        </p>
      </div>

      <div class="footer-column">
        <h3>Contact</h3>
        <p>Email: info@istudio.com</p>
        <p>Phone: +383 44 123 456</p>
      </div>

      <div class="footer-column">
        <h3>Customer Service</h3>

        <div id="paragrafi">
          <p>FAQ</p>
          <p>Shipping Info</p>
          <p>Returns & Exchanges</p>
          <p>Payment Options</p>
          <p>Contact Support</p>
        </div>
      </div>

      <div class="footer-column">
        <h3>Follow Us</h3>
        <p>
          <a href="#">Instagram</a> | <a href="#">Facebook</a> |
          <a href="#">Pinterest</a>
        </p>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© 2025 iSTUDIO. All rights reserved.</p>
    </div>
  </footer>

  <script src="contact.js"></script>
</body>

</html>