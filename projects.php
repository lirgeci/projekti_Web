<?php 
require_once('project.php');
session_start();
$projekti = new Project();
$allProjects = $projekti->read();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projects | iSTUDIO</title>

  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="projects.css" />
</head>

<body>
  <!-- Header -->
  <header>
        <?php include_once 'navbar.php'; ?>
    </header>

  <p class="projects-intro">
    Explore some of our most recent and inspiring interior design projects.
  </p>

  <!-- Projects Grid -->
  <div class="projects-grid">
    
    <!-- Dynamic Projects from Database -->
    <?php
    if(!empty($allProjects)){
        foreach($allProjects as $project){
    ?>
    <div class="project-card">
     <img src="uploads/<?php echo $project['Photo']; ?>" alt="<?php echo $project['ProjectName']; ?>" />

      <h3><?php echo $project['ProjectName']; ?></h3>
      <p><?php echo $project['Category']; ?></p>
    </div>
    <?php
        }
    }
    ?>
  </div>

  <!-- About Projects -->
  <div class="about-projects">
    <h2>About Our Projects</h2>
    <p>
      At iSTUDIO, we believe that every space has a story to tell. Our
      projects are designed to reflect the personality and lifestyle of our
      clients, combining functionality with aesthetic appeal. From the initial
      concept to the final execution, we focus on details, materials, and
      craftsmanship to ensure each project stands out.
    </p>
    <p>
      We specialize in a wide range of project types, including residential
      apartments, luxury homes, commercial offices, boutique hotels, and
      conceptual designs. Each project is approached with creativity,
      innovation, and a deep understanding of the client's vision. Our goal is
      to transform ordinary spaces into extraordinary environments that
      inspire and delight.
    </p>
    <p>
      Sustainability and practicality are at the heart of our design
      philosophy. We carefully select materials, lighting, and layouts to
      enhance comfort, efficiency, and beauty. By blending modern trends with
      timeless design principles, our projects remain both stylish and
      enduring.
    </p>
    <p>
      With a team of experienced designers, architects, and project managers,
      iSTUDIO ensures that every step of the design process is seamless and
      enjoyable for our clients. From consultation and planning to execution
      and final touches, we strive to exceed expectations and deliver spaces
      that are not only visually stunning but also highly functional.
    </p>
  </div>

  <!-- Our Design Process -->
  <div class="process">
    <h2>Our Design Process</h2>

    <div class="process-steps">
      <div class="step">
        <span>01</span>
        <h3>Consultation</h3>
        <p>
          During the consultation phase, we meet with our clients to
          understand their needs, preferences, and lifestyle. We discuss
          budget, timeline, and vision to ensure we're aligned.
        </p>
      </div>

      <div class="step">
        <span>02</span>
        <h3>Concept Development</h3>
        <p>
          Our designers create detailed mood boards, sketches, and 3D
          visualizations to present the concept. This phase allows clients to
          see and refine their space before execution.
        </p>
      </div>

      <div class="step">
        <span>03</span>
        <h3>Material Selection</h3>
        <p>
          We source high-quality materials, furniture, and fixtures that
          match the design concept and client preferences. Every selection is
          made to ensure durability and aesthetic excellence.
        </p>
      </div>

      <div class="step">
        <span>04</span>
        <h3>Execution</h3>
        <p>
          Our experienced team brings the design to life with precision and
          attention to detail. We manage timelines and budgets to ensure
          smooth project completion.
        </p>
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
