<?php 
  $active_page = basename($_SERVER['PHP_SELF']); 
?>

<link rel="stylesheet" href="navbar.css">

<nav class="nav">
    <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <ul class="nav-links" id="nav-links">
        <li><a href="services.php" class="<?php echo ($active_page == 'services.php') ? 'active-link' : ''; ?>">SERVICES</a></li>
        <li><a href="projects.php" class="<?php echo ($active_page == 'projects.php') ? 'active-link' : ''; ?>">PROJECTS</a></li>
        <li><a href="index.php" class="<?php echo ($active_page == 'index.php') ? 'active-link' : ''; ?>">iSTUDIO</a></li>
        <li><a href="aboutus.php" class="<?php echo ($active_page == 'aboutus.php') ? 'active-link' : ''; ?>">ABOUT US</a></li>
        <li><a href="contact.php" class="<?php echo ($active_page == 'contact.php') ? 'active-link' : ''; ?>">CONTACT</a></li>
        
        <?php if (isset($_SESSION['user_id'])): ?>
            <?php if ($_SESSION['role'] == 1): ?>
                <li><a href="dashboard.php" class="<?php echo ($active_page == 'dashboard.php') ? 'active-link' : ''; ?>">DASHBOARD</a></li>
            <?php endif; ?>
           <li>
    <a href="logout.php" onclick="return confirm('Are you sure you want to Logout?');">
        LOGOUT
    </a>
</li><?php endif; ?>
    </ul>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('nav-links');

        if (hamburger) {
            hamburger.addEventListener('click', (e) => {
                navLinks.classList.toggle('active');
            });
        }
    });
</script>