
<?php 
require_once('service.php');
session_start();
$serviceObj = new Service();
$allServices = $serviceObj->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSTUDIO | Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="services.css">
</head>
<body>
    <header>
        <?php include_once 'navbar.php'; ?>
   

        <div class="ourservices">
            <h1>Our services</h1>
            <p>iStudio always puts the clients needs in the center and builds beautiful models around it! Take a look at our main services</p>
        </div>

        <div class="projects-grid">
          <!--    <div class="project-card">
                <img src="fotoServices4.jpg" alt="Furniture" />
                <h3>Furniture Selection & Customizing</h3>
            </div>-->
        
            <?php if(!empty($allServices)): ?>
                <?php foreach($allServices as $service): ?>
                    <div class="project-card">
                       <img src="uploads/<?php echo $service['Photo']; ?>" alt="<?php echo $service['ServiceName']; ?>" />

                        <h3><?php echo $service['ServiceName']; ?></h3>
                        <p class="price-text"><?php echo $service['Price']; ?> &euro;</p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </header>

    <div class="lowerpart">
        <div class="content">
            <h1>Why choose us?</h1>
            <div class="parts">
                <div class="part">
                    <h3>Professional Expertise</h3>
                    <p>Our team is highly qualified to meet all expectations our clients have, and even go so far to reach beyond them!</p>
                </div>
                <div class="part">
                    <h3>Personalized Designs</h3>
                    <p>We believe every space should reflect your unique personality and lifestyle. We create tailor-made concepts.</p>
                </div>
                <div class="part">
                    <h3>On-Time & On-Budget</h3>
                    <p>We value your time and investment. Our projects are delivered according to the agreed timeline and budget.</p>
                </div>
                <div class="part">
                    <h3>Quality Materials</h3>
                    <p>We collaborate with reliable suppliers and skilled craftsmen to ensure long-lasting materials and results.</p>
                </div>
            </div>
        </div>
    </div>

  <!-- Footer -->
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
</body>
</html>