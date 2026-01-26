
<?php 
require_once('service.php');
$serviceObj = new Service();
$allServices = $serviceObj->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSTUDIO - Services</title>
    <link rel="stylesheet" href="services.css">
</head>
<body>
    <header>
        <nav class="nav">
            <ul>
                <li><h2><a href="services.php">SERVICES</a></h2></li>
                <li><a href="projects.php">PROJECTS</a></li>
                <li><a href="index.html">iSTUDIO</a></li>
                <li><a href="aboutus.html">ABOUT US</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>

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
                        <img src="<?php echo $service['Photo']; ?>" alt="" />
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

    <footer class="footer">
        </footer>
</body>
</html>